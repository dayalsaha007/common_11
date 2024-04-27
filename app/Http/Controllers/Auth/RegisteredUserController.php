<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Mail\WebsiteMail;
use Illuminate\Support\Facades\Mail;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $token = hash('sha256', time());

        $verification_link = url('admin/signup/verify/'.$request->email.'/'.$token);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'token' => $token,
            'status' => 0,
        ]);

        $subject = 'Sign Up Verification';
        $body = 'Please click on the link below to confirm the sign-up process:<br><a href="' . $verification_link . '"> Click Here </a>';



        Mail::to($request->email)->send(new WebsiteMail($subject, $body));

        $notification = array(
            'message' => 'To complete the signup, Please check your email and click on the link',
            'alert-type' => 'success'
        );

        return redirect('/register')->with($notification);


        // $user = User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        //     'show_password' => $request->password,
        // ]);

        // event(new Registered($user));

        // Auth::login($user);

        // return redirect(route('dashboard', absolute: false));
    }
}
