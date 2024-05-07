<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Mail\MailController;
use App\Mail\ForgetPasswordMail;
use App\Models\User;
use App\Models\UserSubscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;


class AuthController extends Controller
{
    function loginindex()
    {
        return view('auth.login');
    }
    function registerIndex()
    {
        return view('auth.register');
    }
    function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);

        //Check email

        $user = User::where('email', $request->email)->first();

        //Check Password
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response([
                'message' => 'Invalid Credentials'
            ], 401);
        }

        Auth::login($user);

        if (auth()->user()->role == 'admin') {
            return redirect()->route('admin.dashboard');
        } else if (auth()->user()->role == 'user') {
            return redirect()->route('user.dashboard');
        } else {
            return redirect('/');
        }
    }
    function register(Request $request)
    {
        try {
            $fields = $request->validate([
                'email' => 'required|string|email',
                'password' => 'required|string',
                'name' => 'required',
                'confirm_password' => 'required'
            ]);

            $checkUserEmail = User::where('email', $request->email)->first();
            if ($checkUserEmail) {
                return response([
                    'status' => 402,
                    'message' => 'Email alread exists'
                ]);
            }

            if ($request->password !== $request->confirm_password) {
                return response([
                    'status' => 401,
                    'message' => "password didn't match"
                ]);
            }

            $user = new User();

            $user->name = $request->name;
            $user->password = Hash::make($request->password);
            $user->email = $request->email;
            $user->save();

            $token = $user->createToken('myapptoken')->plainTextToken;

            return response([
                'status' => 200,
                'message' => 'User created successfully',
                'user' => $user,
                'token' => $token
            ]);
        } catch (\Throwable $th) {
            return response([
                'status' => 400,
                'message' => 'Error',
            ]);
        }
    }

    function userLogin(Request $request)
    {
        try {
            $fields = $request->validate([
                'email' => 'required|string|email',
                'password' => 'required|string'
            ]);

            //Check email
            $user = User::where('email', $fields['email'])->first();

            //Check Password
            if (!$user || !Hash::check($fields['password'], $user->password)) {
                return response([
                    'message' => 'Invalid Credentials'
                ], 401);
            }

            Auth::login($user);

            $userId = $user->id; // Assuming you are using Laravel's default authentication

            // Retrieve all user subscriptions based on the user ID
            $userSubscriptions = UserSubscription::where('user_id', $userId)->get();

            $isActiveSubscription = false;

            foreach ($userSubscriptions as $userSubscription) {
                if ($userSubscription->is_active) {
                    $isActiveSubscription = true;
                    break;
                }
            }

            $token = $user->createToken('myapptoken')->plainTextToken;

            return response([
                'status' => 200,
                'user' => $user,
                'token' => $token,
                'isSubscribe' => $isActiveSubscription
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }

        $token = $user->createToken('myapptoken')->plainTextToken;

        return response([
            'status' => 200,
            'user' => $user,
            'token' => $token,
            'isSubscribe' => $isActiveSubscription
        ]);
    }

    function userRegister(Request $request)
    {
        try {
            $fields = $request->validate([
                'email' => 'required|string|email',
                'password' => 'required|string',
                'name' => 'required',
                'confirm_password' => 'required'
            ]);

            $checkUserEmail = User::where('email', $request->email)->first();
            if ($checkUserEmail) {
                return response([
                    'status' => 402,
                    'message' => 'Email alread exists'
                ]);
            }

            if ($request->password !== $request->confirm_password) {
                return response([
                    'status' => 401,
                    'message' => "password didn't match"
                ]);
            }

            $user = new User();

            $user->name = $request->name;
            $user->password = Hash::make($request->password);
            $user->email = $request->email;
            $user->save();

            $token = $user->createToken('myapptoken')->plainTextToken;

            return response([
                'status' => 200,
                'message' => 'User created successfully',
                'user' => $user,
                'token' => $token
            ]);
        } catch (\Throwable $th) {
            return response([
                'status' => 400,
                'message' => 'Error',
            ]);
        }
    }




    // logout
    public function logout(Request $request)
    {
        Session::flush();

        Auth::logout();

        return redirect('login');
    }

    public function registerUser(Request $request)
    {
        try {
            $validatedata = $request->validate([
                'email' => 'required|string|email',
                'password' => 'required|string',
                'confirm_password' => 'required',
                'name' => 'required',
            ]);


            $checkUserEmail = User::where('email', $request->email)->first();
            if ($checkUserEmail) {
                return redirect()->back()->with('message', 'Try again with new email');
            }

            if ($request->password !== $request->confirm_password) {
                return redirect()->back()->with('message', 'Password did not match');;
            }

            $user = new User();

            $user->name = $request->name;
            $user->password = Hash::make($request->password);
            $user->email = $request->email;
            $user->save();

            $token = $user->createToken('myapptoken')->plainTextToken;

            return redirect()->route('login')->with('message', 'User Created');
        } catch (\Throwable $th) {
            return back();
        }
    }

    // logout function
    function checkUser()
    {
        try {
            $check_user_authentication = auth()->check();
            if ($check_user_authentication) {
                return response([
                    'status' => 200,
                    'message' => "user authenticated"
                ]);
            }
        } catch (\Throwable $th) {
            return response([
                'error' => 400
            ]);
        }
    }

    public function forgetPassword()
    {
        return view("auth.forget");
    }

    public function sendLink(Request $request)
    {
        $user = User::getEmailSingle($request->email);
        if (!empty($user)) {

            $user->remember_token = Str::random(30);
            $user->save();
            Mail::to($user->email)->send(new ForgetPasswordMail($user));
            return back()->with('message', "Link is send to your email address");
        } else {
            return back()->with('message', "Email is Invalid !!");
        }
    }

    public function resetPassword($remember_token){

        $user =User::where('remember_token',$remember_token)->first();
        if($user){
            return view('auth.resetPassword',compact('user'));
        }else{
            abort(401,"Token not found.");;
        }

    }

    public function postResetPassword($id, Request $request){
        if($request->password == $request->confirm_password){
            $user =User::where('id','=',$id);
            $user= User::find($id);
            $user->password = $request->password;
            $user->remember_token = Str::random(30);
            $user->update();
            return redirect(url(''))->with('message','Password is changed Sucsessfully');
        }else{
            return back()->with('message', "Password is Invalid !!");
        }
    }
}
