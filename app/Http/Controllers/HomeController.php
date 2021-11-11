<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $users = Auth::user()->codigo;
        return view('admin.index', compact('users'));

    }
}
