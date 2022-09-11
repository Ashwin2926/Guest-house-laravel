<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {   

        
            if(Auth::check() && Auth::user()->hasRole='admin')
            {
                return view('admindash');
            }
            elseif (Auth::check() && Auth::user()->hasRole='user')
            {
                return view('userdash');
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
