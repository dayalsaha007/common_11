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
                        $notification = array(
                            'message' => 'Admin Login Successfully',
                            'alert-type' => 'success'
                        );
                        return redirect('/admin/dashboard')->with($notification);
                    }
                    elseif (Auth::user()->role === '2') {
                        $notification = array(
                            'message' => 'Manager Login Successfully',
                            'alert-type' => 'success'
                        );
                        return redirect('/manager/dashboard')->with($notification);
                    }
                    else{
                        $notification = array(
                            'message' => 'User Login Successfully',
                            'alert-type' => 'success'
                        );
                        return redirect('/dashboard')->with($notification);
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
                
                $notification = array(
                    'message' => 'Admin Logout Successfully',
                    'alert-type' => 'error'
                );

                return redirect('/')->with($notification);
            }

}
