<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Note;
use Illuminate\Support\Facades\Redis;

class AdminAreaController extends Controller
{
    public function show(){
        return view('admin.dashboard');
    }

    public function listUsers(){
        $users = User::where('role', '<>', 'administrator')->get();
        return view('admin.users-list', ['users' => $users]);
    }

    public function showUserProfile(Request $request){
        $user = User::findOrfail($request->id);
        return view('admin.user-edit', ['user' => $user]);
    }

    public function editUser(Request $request) : RedirectResponse{
        $user = User::findOrfail($request->id);
        $user->role = $request->user_role;
        return redirect("/admin/users/$user->id")->with('msg', 'User updated!'); 
    }

        if(Auth::user()->role != 'administrator'){
            return redirect('/dashboard')->with('msg', 'This area is restricted to admins!');
        }
        return view('admin.dashboard');
    }
}
