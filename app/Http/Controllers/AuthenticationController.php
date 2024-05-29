<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthenticationController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function showRegisterFormStep1()
    {
        return view('daftar');
    }

    public function processRegisterFormStep1(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Simpan data ke session
        Session::put('register', [
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect()->route('register.step2');
    }

    public function showRegisterFormStep2()
    {
        return view('DataDiri');
    }

    public function processRegisterFormStep2(Request $request)
{
    $validator = Validator::make($request->all(), [
        'nama' => 'required|string|max:255',    
        'tempat_lahir' => 'required|string|max:255',
        'tanggal_lahir' => 'required|date',
        'no_hp' => 'required|string|max:15',
        'jenis_kelamin' => 'required|string|max:10',
        'pekerjaan' => 'required|string|max:255',
    ]);

    if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Ambil data dari session
        $registerData = Session::get('register');

        // Gabungkan data dari form step 2
        $registerData = array_merge($registerData, [
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'no_hp' => $request->no_hp,
            'jenis_kelamin' => $request->jenis_kelamin,
            'pekerjaan' => $request->pekerjaan,
        ]);

        // Simpan user ke database
        $user = User::create($registerData);

        // Hapus session register
        Session::forget('register');

        // Login user
        Auth::login($user);

        // Redirect ke halaman login setelah pendaftaran berhasil
        return redirect()->route('login')->with('success', 'Akun berhasil dibuat! Silakan login.');
    }


    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('home');
        }

        return redirect()->back()->withErrors([
            'login' => 'Email atau password tidak valid.',
        ])->withInput();
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
