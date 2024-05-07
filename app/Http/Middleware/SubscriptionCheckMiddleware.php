<?php

namespace App\Http\Middleware;

use App\Models\UserSubscription;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SubscriptionCheckMiddleware
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
            return response()->json([
                'message' => 'User does not have an active subscription',
            ], 403); // Return a forbidden response if the user does not have an active subscription
        }

        return $next($request);
    }
}
