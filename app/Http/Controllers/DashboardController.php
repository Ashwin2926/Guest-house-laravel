<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller{
// {
//     public function index(){
//         if(Auth::user()->hasRole('user')){
//             return view('userdash');
//         }
//     elseif(Auth::user()->hasRole('admin')){
//         return view('admindash');
//     }
//     }

        public function index(){
            
                return view('userdash');
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
