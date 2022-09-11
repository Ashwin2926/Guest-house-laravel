<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function login(Request $request)
    {   

        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            if(Auth::check() && Auth::user()->role->id == 1)
            {
                return redirect()->route('admindash');
            }
            elseif (Auth::check() && Auth::user()->role->id == 2)
            {
                return redirect()->route('userdash');
            }
            
        }else{
            return redirect()->route('login')
            ->with('error','Email and Password are wrong.');
        }
    }

    

    public function myprofile()
    {
        return view('myprofile');
    }  

    public function register()
    {
     return view('/auth/register');
    } 

}
