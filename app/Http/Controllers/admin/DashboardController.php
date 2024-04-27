<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Mail\WebsiteMail;
use Illuminate\Support\Facades\Mail;

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


            public function signup_verify($email,$token ){

                $user_data = User::where('email',$email)->where('token',$token)->first();
                if($user_data){
                    $user_data->token = '';
                    $user_data->status = 1;
                    $user_data->update();

                    $notification = array(
                        'message' => 'Your Account is Verified Successfully',
                        'alert-type' => 'success'
                    );

                    return redirect('/login')->with($notification);
                }else{

                    $notification = array(
                        'message' => 'Your Account is not Verified Successfully',
                        'alert-type' => 'error'
                    );

                    return redirect('/register')->with($notification);

                }


            }





            public function admin_forget_password(){

                return view('backend.password.forget_password');
            }

            public function admin_forget_password_sub(Request $request){
                $request->validate([
                    'email' => 'required|email'
                ]);

                $user_data = User::where('email',$request->email)->where('status', 1)->first();

                if(!$user_data) {
                    $notification= ([
                        'alert-type' => 'error',
                        'message' => 'Email address not found!',
                    ]);
                    return redirect()->back()->with($notification);
                }

                $token = hash('sha256',time());

                $user_data->token = $token;
                $user_data->update();

                $reset_link = url('/admin/reset_password/'.$token.'/'.$request->email);
                $subject = 'Reset Password';
                $message = 'Please click on the following link: <br>';
                $message .= '<a href="'.$reset_link.'">Click here</a>';

                Mail::to($request->email)->send(new Websitemail($subject,$message));

                $notification= ([
                    'alert-type' => 'success',
                    'message' => 'Please check your email and follow the steps there.',
                ]);

                return redirect()->route('login')->with($notification);
            }



            public function admin_reset_password($token, $email){


                $admin_data = User::where('token',$token)->where('email',$email)->first();

                if(!$admin_data) {
                    return redirect()->route('login');
                }
                return view('backend.password.reset_password', compact('token', 'email'));
            }

            public function admin_reset_password_sub(Request $request)
            {
                $request->validate([
                    'password' => 'required',
                    'retype_password' => 'required|same:password'
                ]);

                $admin_data = User::where('token', $request->token)->where('email', $request->email)->first();

                $admin_data->password = Hash::make($request->password);
                $admin_data->token = '';
                $admin_data->update();

                $notification= ([
                    'alert-type' => 'success',
                    'message' => 'Password is reset successfully.',
                ]);

                return redirect()->route('login')->with($notification);

            }
}
