<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminsController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->input('q');
        $users = User::query()
            ->where('role', 'admin')
            ->when($q, fn($query) => $query->where(function($q2) use ($q){
                $q2->where('name','like',"%$q%")->orWhere('email','like',"%$q%");
            }))
            ->orderByDesc('id')
            ->paginate(20)
            ->withQueryString();
        return view('admin.admins.index', compact('users','q'));
    }

    public function create()
    {
        return view('admin.admins.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required','string','max:255'],
            'email' => ['required','email','max:255','unique:users,email'],
            'password' => ['required','string','min:6'],
        ]);
        $validated['password'] = Hash::make($validated['password']);
        $validated['role'] = 'admin';
        User::create($validated);
        return redirect()->route('admin.admins.index');
    }

    public function edit(User $admin)
    {
        return view('admin.admins.edit', ['user' => $admin]);
    }

    public function update(Request $request, User $admin)
    {
        $validated = $request->validate([
            'name' => ['required','string','max:255'],
            'email' => ['required','email','max:255','unique:users,email,'.$admin->id],
            'password' => ['nullable','string','min:6'],
        ]);
        if(!empty($validated['password'])){
            $validated['password'] = Hash::make($validated['password']);
        } else {
            unset($validated['password']);
        }
        $validated['role'] = 'admin';
        $admin->update($validated);
        return redirect()->route('admin.admins.index');
    }

    public function destroy(User $admin)
    {
        if(auth()->id() === $admin->id){
            return redirect()->route('admin.admins.index');
        }
        $admin->delete();
        return redirect()->route('admin.admins.index');
    }
}