<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function loginUser(Request $req)
    {
        $formFields = $req->validate([
            "name" => ['required', 'string', 'max:255'],
            "email" => ['required', 'email', 'unique:users,email'],
            "password" => ['required', 'string', 'min:6'],
        ]);

        // Hash the password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create the user
        $user = User::create($formFields);

        // Log the user in
        Auth::login($user);

        return response()->json($user);
    }
}
