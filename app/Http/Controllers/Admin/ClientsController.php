<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClientsController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->input('q');
        $users = User::query()
            ->where('role', 'user')
            ->when($q, fn($query) => $query->where(function($q2) use ($q){
                $q2->where('name','like',"%$q%")->orWhere('email','like',"%$q%");
            }))
            ->orderByDesc('id')
            ->paginate(20)
            ->withQueryString();
        return view('admin.clients.index', compact('users','q'));
    }

    public function create()
    {
        return view('admin.clients.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required','string','max:255'],
            'email' => ['required','email','max:255','unique:users,email'],
            'password' => ['required','string','min:6'],
        ]);
        $validated['password'] = Hash::make($validated['password']);
        $validated['role'] = 'user';
        User::create($validated);
        return redirect()->route('admin.clients.index');
    }

    public function edit(User $client)
    {
        return view('admin.clients.edit', ['user' => $client]);
    }

    public function update(Request $request, User $client)
    {
        $validated = $request->validate([
            'name' => ['required','string','max:255'],
            'email' => ['required','email','max:255','unique:users,email,'.$client->id],
            'password' => ['nullable','string','min:6'],
        ]);
        if(!empty($validated['password'])){
            $validated['password'] = Hash::make($validated['password']);
        } else {
            unset($validated['password']);
        }
        $validated['role'] = 'user';
        $client->update($validated);
        return redirect()->route('admin.clients.index');
    }

    public function destroy(User $client)
    {
        if(auth()->id() === $client->id){
            return redirect()->route('admin.clients.index');
        }
        $client->delete();
        return redirect()->route('admin.clients.index');
    }
}