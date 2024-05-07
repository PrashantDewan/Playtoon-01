<?php

namespace App\Http\Controllers\Subscription;

use App\Http\Controllers\Controller;
use App\Models\SubscriptionPlan;
use App\Models\UserSubscription;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserSubscriptionController extends Controller
{

    public function home(){
        try {
            $plans = SubscriptionPlan::where('status','active')->get();
            return view('subscription.subscription',compact('plans'));
        } catch (\Exception $e) {
           return redirect()->back();
        }
    }

    public function purchsePlan($id){
        try {
           $plan = SubscriptionPlan::find($id);
            if($plan->status == 'active'){
                return view('subscription.purchase',compact('plan'));
            }
            else{
                // message
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            throw $th;
            return redirect()->back();
        }
    }
    public function index()
    {
        try {
            // Retrieve all user subscriptions
            $userSubscriptions = UserSubscription::all();

            return view('admin.subscriptions.index',compact('userSubscriptions'));
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to fetch user subscriptions',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
    public function getUserSubscription()
    {
        try {
            // Retrieve all user subscriptions
            $userSubscriptions = UserSubscription::where('user_id', auth()->user()->id)->get();

            return response()->json([
                'status' => 200,
                'data' => $userSubscriptions,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to fetch user subscriptions',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
    public function show($id)
    {
        try {
            // Find a specific user subscription by ID
            $userSubscription = UserSubscription::find($id);
            // if subscription user_id is auth user if


            if (!$userSubscription) {
                return response()->json([
                    'message' => 'User subscription not found',
                ], 404);
            }
            // if user is admin
            if (auth()->user()->role == 'admin') {
                return response()->json([
                    'status' => 200,
                    'data' => $userSubscription,
                ]);
            } elseif ($userSubscription->user_id == auth()->user()->id) {
                return response()->json([
                    'status' => 200,
                    'data' => $userSubscription,
                ]);
            } else {
                return response()->json([
                    'message' => 'You are not authorized to view this subscription',
                ], 403);
            }
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to fetch user subscription',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
    public function store(Request $request)
    {
        try {
            // Validate the incoming request data
            $validatedData = $request->validate([
                'user_id' => 'required|exists:users,id',
                'subscription_plan_id' => 'required|exists:subscription_plans,id',
                'payment_type' => 'required|string',
            ]);

            // Create a new user subscription instance
            $userSubscription = new UserSubscription();
            $userSubscription->user_id = $validatedData['user_id'];
            $userSubscription->is_active = true;
            $userSubscription->start_date = Carbon::now()->toDateString();
            $userSubscription->end_date = Carbon::now()->addDays($this->getTrialPeriodDays($validatedData['subscription_plan_id']))->toDateString();
            $userSubscription->subscription_plan_id = $validatedData['subscription_plan_id'];
            $userSubscription->payment_type = $validatedData['payment_type'];
            $userSubscription->save();

            return response()->json([
                'status' => 200,
                'message' => 'User subscription created successfully',
                'data' => $userSubscription,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to create user subscription',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            // Find the user subscription to update
            $userSubscription = UserSubscription::find($id);

            if (!$userSubscription) {
                return response()->json([
                    'message' => 'User subscription not found',
                ], 404);
            }

            if ($userSubscription->user_id == auth()->user()->id) {
                // Validate the incoming request data
                $validatedData = $request->validate([
                    'user_id' => 'required|exists:users,id',
                    'subscription_plan_id' => 'required|exists:subscription_plans,id',
                    'payment_type' => 'required|string',
                ]);

                // Update the user subscription attributes
                $userSubscription->user_id = $validatedData['user_id'];
                $userSubscription->subscription_plan_id = $validatedData['subscription_plan_id'];
                $userSubscription->is_active = true;
                $userSubscription->start_date = Carbon::now()->toDateString();
                $userSubscription->end_date = Carbon::now()->addDays($this->getTrialPeriodDays($validatedData['subscription_plan_id']))->toDateString();
                $userSubscription->payment_type = $validatedData['payment_type'];
                $userSubscription->save();

                return response()->json([
                    'status' => 200,
                    'message' => 'User subscription updated successfully',
                    'data' => $userSubscription,
                ]);
            } else {
                return response()->json([
                    'message' => 'You are not authorized to update this user subscription',
                ], 403);
            }
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to update user subscription',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function destroy($id)
    {
        try {
            // Find the user subscription to delete
            $userSubscription = UserSubscription::find($id);

            if (!$userSubscription) {
                return response()->json([
                    'message' => 'User subscription not found',
                ], 404);
            }

            // Delete the user subscription
            if ($userSubscription->user_id == auth()->user()->id) {
                $userSubscription->delete();
                return response()->json([
                    'status' => 200,
                    'message' => 'User subscription deleted successfully',
                ]);
            } else {
                return response()->json([
                    'message' => 'You are not authorized to delete this user subscription',
                ], 403);
            }
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to delete user subscription',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    private function getTrialPeriodDays($subscriptionPlanId)
    {
        // Retrieve the subscription plan and get its trial period days
        $subscriptionPlan = SubscriptionPlan::find($subscriptionPlanId);

        if ($subscriptionPlan) {
            return $subscriptionPlan->trial_period_days;
        }

        return 0;
    }
}
