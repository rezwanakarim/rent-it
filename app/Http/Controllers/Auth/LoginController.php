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
        $user = null;

        $request->validate([
            'email' => ['required'],
            'password'   => [
                'required',
                function ($attribute, $value, $fail) use ($request, &$user) {
                    // Find the user by phone or email
                    $user = Customer::where('phone', $request->email)->orWhere('email', $request->email)->first();
                    // Check if user exists and the password matches
                    if (!$user || !Hash::check($value, $user->password)) {
                        $user = null; // Reset user if authentication fails
                        $fail('Invalid password');
                    }
                },
            ],
        ]);
        if ($user) {
            Auth::guard('web')->login($user);
            return redirect()->route('home');
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
                'contact_number' => $request->number,
                'email' => $request->email,
                'phone' => $request->number,
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
