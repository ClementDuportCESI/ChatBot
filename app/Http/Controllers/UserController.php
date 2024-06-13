<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRoleRequest;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{

    public function index()
    {
        $users = User::paginate(9);
        return view("users.index", ["users" => $users]);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $users = User::where('name', 'LIKE', "%{$query}%")
            ->orderBy('created_at', 'desc')
            ->paginate(9)
            ->appends(['query' => $query]);

        return view('users.search', compact('users', 'query'));
    }


    public function create()
    {
        return view('users.create');
    }


    public function store(UserRequest $request)
    {

        $hashedPassword = Hash::make($request->input("password"));

        $user = User::create([
            "name" => $request->input("name"),
            "email" => $request->input("email"),
            "password" => $hashedPassword,
            "role" => $request->input("role"),
        ]);

        return redirect()->route("users.index");
    }


    public function edit(User $user)
    {

        return view('users.edit', compact('user'));
    }


    public function update(UpdateUserRoleRequest $request, User $user)
    {


        $user->update($request->validated());
        return redirect()->route("users.index");
    }


    public function destroy(User $user)
    {
        if ($user->role !== 'customer') {
            return redirect()->route('users.index')->with('error', 'Les comptes administrateurs ne peuvent pas être supprimés.');
        }

        $user->delete();

        return redirect()->route('users.index')->with('success', 'Utilisateur supprimé.');
    }
}
