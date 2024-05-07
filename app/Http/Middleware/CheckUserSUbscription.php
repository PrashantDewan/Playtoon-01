<?php

namespace App\Http\Middleware;

use App\Models\AccountSession;
use App\Models\UserSubscription;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;

class CheckUserSUbscription
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $userId = auth()->user()->id; // Assuming you are using Laravel's default authentication

        // Retrieve all user subscriptions based on the user ID
        $userSubscriptions = UserSubscription::where('user_id', $userId)->get();

        $isActiveSubscription = false;

        foreach ($userSubscriptions as $userSubscription) {
            if ($userSubscription->is_active) {
                $isActiveSubscription = true;
                break;
            }
        }

        if (!$isActiveSubscription) {
           return redirect()->route('subscription');
        }
        // dd(Session::get('accountSessionId'));
        // $id = Session::get('accountSessionId');
        // $session = AccountSession::find($id);
        // dd($session);
        // if($session){
        //     $session->delete();
        // }
        // dd($session);

        return $next($request);

    }
}
