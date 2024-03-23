<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;

class AdminProfileChangeController extends Controller
{
    function profile_change(){

        $id = Auth::user()->id;
        $user = User::find($id);

        return view('backend.profile.profile_change', [
            'user' => $user,
        ]);
    }
    function update_profile_change(Request $request, $user_id){

        if($request->file('image') == null  ){

            if($request->new_pass == ''){

                User::findorFail($user_id)->update([

                    'name' => $request->name,
                    'email' => $request->email,
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
