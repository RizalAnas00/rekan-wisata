<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }
    public function editEmail()
    {
        return view('editEmailUser');
    }

    public function editPhone()
    {
        return view('editPhoneUser');
    }

    public function updateEmail(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'email' => 'required|email|unique:users,email,'.$user->id,
            'password' => 'required',
        ]);

        if (!Hash::check($request->password, $user->password)) {
            return back()->withErrors(['password' => 'Password is incorrect']);
        }

        $user->email = $request->email;
        $user-> save();

        return redirect()->route('profile.show')->with('success', 'Email updated successfully');
    }

    public function updatePhoneNumber(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'phone_number' => 'required|string|unique:users,no_hp,'.$user->id,
            'password' => 'required',
        ]);

        if (!Hash::check($request->password, $user->password)) {
            return back()->withErrors(['password' => 'Password is incorrect']);
        }

        $user->no_hp = $request->phone_number;
        $user->save();

        return redirect()->route('profile.show')->with('success', 'Phone number updated successfully');
    }

}
