<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $role = $request->input('roles');
    
        $query = User::query();
    
        if (!empty($search)) {
            $query->where(function ($q) use ($search) {
                $q->where('full_name', 'like', '%' . $search . '%')
                  ->orWhere('email', 'like', '%' . $search . '%')
                  ->orWhereDate('created_at', $search);
            });
        }
    
        if (!is_null($role)) {
            $query->where('roles', $role);
        }
    
        $users = $query->get();
    
        return view('user.index', compact('users'));
    }
    
    public function updateRoles(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->roles = $request->has('roles') ? 1 : 0;
        $user->save();
        return redirect()->back()->with('success', 'Setting updated successfully');
    }
}
