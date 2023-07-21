<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\crudmodel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CrudmodelController extends Controller
{
    // loginpage
    public function index()
    {
        return view('welcome');
    }
    // registration page
        public function registrationView()
    {
        return view('UserRegistration');
    }

    public function handleRegistration(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
            'utype' => 'required',
        ]);
        CrudModel::create($validatedData);
        return view('crud');
    }
    // userpage
    public function userPageView()
    {
        return view('userpage');
    }
    // crud page
    public function crudPageView()
    {
        return view('crud');
    }
    // login

    public function handleLogin(Request $request)
        {
            $email = $request->input('email');
            $password = $request->input('password');
            // Find the user in the database by email
            $user = Crudmodel::where('email', $email)->first();
            $pass = Crudmodel::where('password', $password)->first();
            if ($user && $pass) {
                if ($user->utype === 'Admin') {
                    return redirect()->route('crud');
                } elseif ($user->utype === 'User') {
                    return redirect()->route('userpage');
                } else {
                    return redirect()->route('login')->with('error', 'Invalid user type. Please contact support.');
                }
            } else {
                return redirect()->route('login')->with('error', 'Invalid credentials. Please try again.');
            }
        }

    

    
}
