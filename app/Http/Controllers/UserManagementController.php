<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserManagementController extends Controller
{
    public function index() {
        $users = User::all();
        return view('user-management.index', compact('users'));
    }
}
