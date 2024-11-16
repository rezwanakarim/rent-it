<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRequest;
use App\Models\customer;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login()
    {
        return view('frontend.login');
    }

    public function postLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            // Authentication passed...
            return redirect()->route('home');
        } else {
            return redirect()->back()->withErrors(['email' => 'The provided credentials do not match our records.']);
        }
    }

    public function register()
    {
        return view('frontend.register');
    }

    public function postRegister(CustomerRequest $request)
    {
        try {
            customer::create([
                'firstName' => $request->firstName,
                'lastName' => $request->lastName,
                'username' => $request->username,
                'gender' => $request->gender,
                'address' => $request->address,
                'number' => $request->number,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            return redirect()->route('customers.login')->withMessage("Registration Successful");
        } catch (Exception $e) {
            return redirect()->back()->withInput()->with('error', $e->getMessage());
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect()->route('customers.login'); 
    }
}
