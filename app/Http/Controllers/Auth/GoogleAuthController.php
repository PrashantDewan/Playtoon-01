<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Illuminate\Http\Request;


class GoogleAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    // login with google auth
    public function callBackGoogle(Request $request)
    {
        try {
            $user = Socialite::driver('google')->user();
            $isUser = User::where('google_id', $user->id)->first();

            if ($isUser) {
                Auth::login($isUser);
                return redirect()->route('home');
            } else {
                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'password' => encrypt('UltimatePassword'),
                    // email verify

                    // 'email_verified_at' => date('Y-m-d H:i'),

                ]);

                // UserProfile::create([
                //     'name' => $user->name,
                //     'email' => $user->email,
                //     'user_id' => $createUser->id,
                // ]);

                // start send mail
                // $details = [
                //     'title' => 'Welcome To JobMusk',
                //     'body' => 'Hi ' . $user->name . ' Thank You For The Registration.',
                // ];
                // $subject = 'Message from JobMusk';

                // Auth::login($createUser);

                // event(new Registered($createUser));

                // Mail::to($user->email)->send(new \App\Mail\SendMail($details, $subject));
                // end send mail

                return redirect()->route('home');
            }
        } catch (Exception $exception) {
            return response([
                'message' => 'Invalid credentials' . $exception,
                'status' => 400
            ]);
        }
    }
}
