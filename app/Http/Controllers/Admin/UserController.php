<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->input('q');
        $role = $request->input('role');
        $users = User::query()
            ->when($q, fn($query) => $query->where(function($q2) use ($q){
                $q2->where('name','like',"%$q%")->orWhere('email','like',"%$q%");
            }))
            ->when($role, fn($query) => $query->where('role', $role))
            ->orderByDesc('id')
            ->paginate(20)
            ->withQueryString();
        return view('admin.users.index', compact('users','q','role'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required','string','max:255'],
            'email' => ['required','email','max:255','unique:users,email'],
            'password' => ['required','string','min:6'],
            'role' => ['required','in:user,admin'],
        ]);
        $validated['password'] = Hash::make($validated['password']);
        User::create($validated);
        return redirect()->route('admin.users.index');
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => ['required','string','max:255'],
            'email' => ['required','email','max:255','unique:users,email,'.$user->id],
            'password' => ['nullable','string','min:6'],
            'role' => ['required','in:user,admin'],
        ]);
        if(!empty($validated['password'])){
            $validated['password'] = Hash::make($validated['password']);
        } else {
            unset($validated['password']);
        }
        $user->update($validated);
        return redirect()->route('admin.users.index');
    }

    public function destroy(User $user)
    {
        // Evitar que un admin se elimine a sí mismo (opcional)
        if(auth()->id() === $user->id){
            return redirect()->route('admin.users.index');
        }
        $user->delete();
        return redirect()->route('admin.users.index');
    }
}