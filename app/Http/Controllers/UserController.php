<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function updateRoles(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $user->roles = $request->roles;
        $user->save();

        return response()->json(['success' => true, 'message' => 'User roles updated successfully.']);
        
    }
}
