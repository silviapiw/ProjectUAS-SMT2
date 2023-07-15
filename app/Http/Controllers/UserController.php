<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::getAllusers();
        return view('users.index', compact('users'));
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect('/users')->with('success', 'User deleted successfully!');
    }
}
