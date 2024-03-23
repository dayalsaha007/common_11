<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

      /*-----------Front page logic---------------*/
            function index(){
                if (Auth::guest()) {
                    return view('auth.login');
                } 
                else 
                { 
                    if(Auth::user()->role === '1' ){
                        return redirect('/admin/dashboard');
                    }
                    elseif (Auth::user()->role === '2') {
                        return redirect('/manager/dashboard');
                    }
                    else{
                        return redirect('/dashboard');
                    }
                }
            }

     /*-----------Admin Dahsboard---------------*/
            function admin_dashboard(){
                return view('backend.dashboard.admin_dashboard');
            }

      /*-----------manager Dahsboard---------------*/
        function manager_dashboard(){
            return view('backend.dashboard.manager_dashboard');
        }

      /*-----------User Dahsboard---------------*/
      function dashboard(){
          return view('dashboard');
        }

        /*-----------Logout Dahsboard---------------*/
            function logout(){
                Auth::logout();
                return redirect('/');
            }

}
