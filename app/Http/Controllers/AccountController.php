<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Validation\ValidationException;

class AccountController extends Controller
{
    public function showSignUpForm()
    {
        return view('sign_up');
    }

    public function createAccount(Request $request)
    {
        try {
            $request->validate([
                'nama_lengkap' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'nik' => ['required', 'string', 'digits:16', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]);
            dd($request);
            
            $user = User::create([
                'name' => $request->nama_lengkap,
                'email' => $request->email,
                'nik' => $request->nik,
                'password' => Hash::make($request->password),
            ]);

            Auth::login($user);

            return redirect()->route('home')->with('success', 'Akun berhasil dibuat dan Anda telah login!');
        } catch (ValidationException $e) {
            $errors = $e->errors(); 
            return redirect()->back()
                    ->withErrors($errors)
                    ->withInput();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan sistem yang tidak terduga.');
        }
    }

    public function showSignInForm()
    {
        return view('sign_in');
    }

    public function signIn(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        $credentials = $request->only('email', 'password');

        $adminEmail = env('ADMIN_EMAIL');
        $adminPassword = env('ADMIN_PASSWORD');

        if ($request->email === $adminEmail) {

            if ($request->password === $adminPassword) {
                session(['admin_logged_in' => true, 'admin_email' => $adminEmail]);
                return redirect()->route('admin.dashboard');
            }
        }

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();

            return redirect()->intended(route('home'));
        }

        throw ValidationException::withMessages([
            'email' => __('Kredensial yang diberikan tidak cocok dengan catatan kami.'),
        ]);
    }

    public function userProfile()
    {
        return view('profil', ['user' => Auth::user()]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->forget(['admin_logged_in', 'admin_email']);

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('home'));
    }
}