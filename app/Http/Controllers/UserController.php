<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function signup(){
        return view('users.signup');
    }

    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone_number' => ['required', 'numeric', 'digits_between:10,15', 'unique:users'],
            'address' => ['required', 'string', 'max:500'],
            'pincode' => ['required', 'numeric', 'digits:6'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput();
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'pincode' => $request->pincode,
            'password' => Hash::make($request->password),
        ]);

        // Optionally, you can log the user in after registration
        auth()->login($user);

        return redirect()->route('user.login')->with('success', 'Account created successfully!');

    }

    public function login(Request $request)
    {
        $validator = validate() [
            'email' => ['required', 'email'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput();
        }

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect()->intended('dashboard')->with('success', 'You are logged in!');
        } else {
            // Authentication failed
            return redirect()->back()
                             ->withErrors(['email' => 'Invalid credentials.'])
                             ->withInput();
        }
    }
}
