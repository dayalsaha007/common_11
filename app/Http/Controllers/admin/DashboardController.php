<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Mail\WebsiteMail;
use Carbon\Carbon;
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

        /*-----------Signup Verify---------------*/
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

        /*-----------Forget Password--------------*/
            public function admin_forget_password(){

                return view('backend.password.forget_password');
            }

        /*-----------Forget Password submit--------------*/
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


        /*-----------Reset Password ------------*/
            public function admin_reset_password($token, $email){


                $admin_data = User::where('token',$token)->where('email',$email)->first();

                if(!$admin_data) {
                    return redirect()->route('login');
                }
                return view('backend.password.reset_password', compact('token', 'email'));
            }

        /*-----------Reset Password submit--------------*/
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

        /*-----------Update User Data-------------*/
                function update_user_data(Request $request, $user_id){

                    if($request->file('image') == null  ){

                        if($request->new_pass == ''){

                            User::findorFail($user_id)->update([

                                'name' => $request->name,
                                'email' => $request->email,
                                'phone' => $request->phone,
                                'country' => $request->country,
                                'address' => $request->address,
                                'state' => $request->state,
                                'city' => $request->city,
                                'zip' => $request->zip,
                                'created_at' => Carbon::now(),
                            ]);
                            return response()->json(['status'=>'success', 'message'=>'Name & Email updated successfully']);

                        }
                        else
                        {

                            if( Hash::check($request->old_pass, Auth::user()->password)  ){

                                if ( $request->new_pass == $request->confirm_pass ) {

                                    User::findorFail($user_id)->update([

                                        'name' => $request->name,
                                        'email' => $request->email,
                                        'phone' => $request->phone,
                                        'country' => $request->country,
                                        'address' => $request->address,
                                        'state' => $request->state,
                                        'city' => $request->city,
                                        'zip' => $request->zip,
                                        'password' => Hash::make($request->new_pass),
                                        'created_at' => Carbon::now(),
                                    ]);
                                    return response()->json(['status'=>'success', 'message'=>'password updated successfully']);
                                }
                                return response()->json(['status'=>'success', 'message'=>'Mis matched Password']);

                                }
                            else
                            {

                                return response()->json(['status'=>'success', 'message'=>'Mis matched Password']);
                            }
                        }

                    }
                    else
                    {

                            $image = $request->file('image');
                            $name_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
                            $image->move('backend/uploads/user/',  $name_name);
                            $save_url = 'backend/uploads/user/' .  $name_name;

                            $profile_img = User::find($user_id);
                             $old_image =  $profile_img->image;

                            if($request->new_pass == ''){

                                User::findorFail($user_id)->update([
                                    'name' => $request->name,
                                    'email' => $request->email,
                                    'image' => $save_url,
                                    'phone' => $request->phone,
                                    'country' => $request->country,
                                    'address' => $request->address,
                                    'state' => $request->state,
                                    'city' => $request->city,
                                    'zip' => $request->zip,
                                    'created_at' => Carbon::now(),
                                ]);

                                if (file_exists($old_image)) {
                                    unlink($old_image);
                                 }

                                return response()->json(['status'=>'success', 'message'=>'Image updated Successfully!']);

                            }
                            else
                            {

                                $image = $request->file('image');
                                $name_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
                                $image->move('backend/uploads/user/',  $name_name);
                                $save_url = 'backend/uploads/user/' .  $name_name;

                                $profile_img = User::find($user_id);
                                $old_image =  $profile_img->image;


                                if( Hash::check($request->old_pass, Auth::user()->password)  ){

                                    if ( $request->new_pass == $request->confirm_pass ) {

                                        User::findorFail($user_id)->update([

                                            'name' => $request->name,
                                            'email' => $request->email,
                                            'image' => $save_url,
                                            'phone' => $request->phone,
                                            'country' => $request->country,
                                            'address' => $request->address,
                                            'state' => $request->state,
                                            'city' => $request->city,
                                            'zip' => $request->zip,
                                            'password' => Hash::make($request->new_pass),
                                            'created_at' => Carbon::now(),
                                        ]);

                                        if (file_exists($old_image)) {
                                            unlink($old_image);
                                            }

                                        return response()->json(['status'=>'success', 'message'=>'Image & password updated!']);
                                    }
                                    return response()->json(['status'=>'success', 'message'=>'Mis matched Password']);

                                    }
                                else
                                {

                                    return response()->json(['status'=>'success', 'message'=>'Mis matched Password']);
                                }

                            }

                    }


                }









}
