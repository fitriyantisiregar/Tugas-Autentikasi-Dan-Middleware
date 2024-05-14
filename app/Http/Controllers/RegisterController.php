<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'gender' => 'required|string|max:10',
            'umur' => 'required|integer',
            'tanggal lahir' => 'required|date',
            'alamat' => 'required|string|max:255',
            'role' => 'required|string|in:user,superadmin',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::create([
            'nama' => $request->name,
            'gender' => $request->gender,
            'umur' => $request->age,
            'tanggal lahir' => $request->dob,
            'alamat' => $request->address,
            'role' => $request->role,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        auth()->login($user);

        return redirect()->route($user->role === 'superadmin' ? 'user-management' : 'products');
    }
}
