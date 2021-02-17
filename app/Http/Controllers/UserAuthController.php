<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserAuthController extends Controller
{
    //
    function login()
    {
        return view('auth.login');
    }
    function register()
    {
        return view('auth.register');
    }
    function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:12'
        ]);

        $user = new User;
        $user->name  = $request->name;
        $user->email  = $request->email;
        $user->password  = Hash::make($request->password);
        $user->remember_token = $request->_token;
        $query = $user->save();

        if($query)
        {
            return back()->with('Success', 'You hav been Successfuly register');
        }
        else
        {
            return back()->with('false', 'You hav been false register');
        }
    }
    function check(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12'
        ]);

        $user = User::where('email','=', $request->email)->first();
        if($user)
        {
            if(Hash::check($request->password, $user->password))
            {
                $request->session()->put('loggedUser', $user->id);
                return redirect('profile');
            }
            else
            {
                return back()->with('false', 'You hav password error');
            }
        }
        else
        {
            return back()->with('false', 'You hav email not find');
        }
    }
    function profile()
    {
        if(session()->has('loggedUser'))
        {
            $user = User::where('id', '=', session('loggedUser'))->first();
            $data = [
                'loggedUserInfo'=>$user
            ];
        }
        else
        {
            return redirect('login');
        }
        return view('admin.profile', $data);
    }
    function logaut()
    {
        if(session()->has('loggedUser'))
        {
            session()->pull('loggedUser');
            return redirect('login');
        }
    }
}