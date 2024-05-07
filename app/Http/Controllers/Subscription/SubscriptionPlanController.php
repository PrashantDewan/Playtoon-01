<?php

namespace App\Http\Controllers\Subscription;

use App\Http\Controllers\Controller;
use App\Models\SubscriptionPlan;
use Illuminate\Http\Request;

class SubscriptionPlanController extends Controller
{
    public function create(){
        return view('admin.subscriptionPlan.create');
    }
    public function index()
    {
        try {
            // Retrieve all subscription plans
            $subscriptionPlans = SubscriptionPlan::all();
            return view('admin.subscriptionPlan.index', compact('subscriptionPlans'));
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to fetch subscription plans',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function plans()
    {
        try {
            // Retrieve all subscription plans
            $subscriptionPlans = SubscriptionPlan::where('status', 'active')->get();

            return response()->json([
                'status' => 200,
                'data' => $subscriptionPlans,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to fetch subscription plans',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function show($id)
    {
        try {
            // Find a specific subscription plan by ID
            $subscriptionPlan = SubscriptionPlan::find($id);

            if (!$subscriptionPlan) {
                return response()->json([
                    'message' => 'Subscription plan not found',
                ], 404);
            }

            return response()->json([
                'data' => $subscriptionPlan,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to fetch subscription plan',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
    public function edit($id)
    {
        try {
            // Find a specific subscription plan by ID
            $subscriptionPlan = SubscriptionPlan::find($id);

            if (!$subscriptionPlan) {
                return response()->json([
                    'message' => 'Subscription plan not found',
                ], 404);
            }
            return view('admin.subscriptionPlan.edit', compact('subscriptionPlan'));
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to fetch subscription plan',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function store(Request $request)
    {
        try {
            // Validate the incoming request data
            $validatedData = $request->validate([
                'name' => 'required|string',
                'description' => 'nullable|string',
                'price' => 'required|numeric',
                'currency' => 'required|string',
                'trial_period_days' => 'required|integer',
            ]);

            // Create a new subscription plan instance
            $subscriptionPlan = new SubscriptionPlan();
            $subscriptionPlan->name = $validatedData['name'];
            $subscriptionPlan->description = $validatedData['description'];
            $subscriptionPlan->price = $validatedData['price'];
            $subscriptionPlan->currency = $validatedData['currency'];
            $subscriptionPlan->trial_period_days = $validatedData['trial_period_days'];
            $subscriptionPlan->save();
            return redirect()->route('admin.index.subscription.plan')->with('success', 'Subscription plan created successfully');
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to create subscription plan',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            // Find the subscription plan to update
            $subscriptionPlan = SubscriptionPlan::find($id);

            if (!$subscriptionPlan) {
                return response()->json([
                    'message' => 'Subscription plan not found',
                ], 404);
            }

            // Validate the incoming request data
            $validatedData = $request->validate([
                'name' => 'required|string',
                'description' => 'nullable|string',
                'price' => 'required|numeric',
                'currency' => 'required|string',
                'trial_period_days' => 'required|integer',
                'status' => 'required|in:active,inactive',
            ]);

            // Update the subscription plan attributes
            $subscriptionPlan->name = $validatedData['name'];
            $subscriptionPlan->description = $validatedData['description'];
            $subscriptionPlan->price = $validatedData['price'];
            $subscriptionPlan->currency = $validatedData['currency'];
            $subscriptionPlan->trial_period_days = $validatedData['trial_period_days'];
            $subscriptionPlan->status = $validatedData['status'];
            $subscriptionPlan->save();

            return response()->json([
                'message' => 'Subscription plan updated successfully',
                'data' => $subscriptionPlan,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to update subscription plan',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function destroy($id)
    {
        try {
            // Find the subscription plan to delete
            $subscriptionPlan = SubscriptionPlan::find($id);

            if (!$subscriptionPlan) {
                return response()->json([
                    'message' => 'Subscription plan not found',
                ], 404);
            }

            // Delete the subscription plan
            $subscriptionPlan->delete();

            return response()->json([
                'message' => 'Subscription plan deleted successfully',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to delete subscription plan',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function status($id)
    {
        try {
            $subscriptionPlan = SubscriptionPlan::find($id);
            if (!$subscriptionPlan) {
                return response()->json([
                    'message' => 'Subscription plan not found',
                ], 404);
            }
            if($subscriptionPlan->status == 'active'){
                $subscriptionPlan->status = 'inactive';
            }else{
                $subscriptionPlan->status = 'active';
            }
            $subscriptionPlan->save();
            return redirect()->back();
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to update subscription plan status',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
