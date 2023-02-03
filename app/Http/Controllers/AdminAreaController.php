<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;


class AdminAreaController extends Controller
{
    public function show(){
        if(Auth::user()->role != 'administrator'){
            return redirect('/dashboard')->with('msg', 'This area is restricted to admins!');
        }
        return view('admin.dashboard');
    }
}
