<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;

class EmailVerificationPromptController extends Controller
{
    /**
     * Display the email verification prompt.
     */
    public function __invoke(Request $request): RedirectResponse|View
    {
        // return $request->user()->hasVerifiedEmail()
        //             ? redirect()->intended(route('dashboard', absolute: false))
        //             : view('auth.verify-email');

        $email = $request->input('email');
        $token = $request->input('token');

        $user = User::where('email', $email)
                             ->where('token', $token)
                             ->first();

        if ($user) {
            $user->status = 1;
            $user->token = '';
            $user->save();

            $notification = [
                'message' => 'Your Account is Verified Successfully',
                'alert-type' => 'success'
            ];

            return redirect('/login')->with($notification);

        } else {
            $notification = [
                'message' => 'Your Account is not Verified Successfully',
                'alert-type' => 'error'
            ];

            return redirect('/register')->with($notification);
        }
        
    }
}
