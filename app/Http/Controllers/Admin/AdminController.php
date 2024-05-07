<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function home(){
        if (auth()->user()->role == 'admin') {
            return redirect()->route('admin.dashboard');
        } else if (auth()->user()->role == 'user') {
            return redirect()->route('user.dashboard');
        } else {
            return redirect('/');
        }
    }
}
