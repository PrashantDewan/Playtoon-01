<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    // Create an account
    public function create(Request $request)
    {
        try {
            // Validate the request data
            $validatedData = $request->validate([
                'name' => 'required|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            // Create a new account instance
            $account = new Account();
            $account->name = $validatedData['name'];
            $account->parent_id = auth()->user()->id;

            // Handle image upload if provided
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $image_name = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images/account/'), $image_name);
                $image_path = 'public/images/account/' . $image_name;
            } else {
                $image_path = 'public/images/account/default.png';
            }
            $account->image = $image_path;
            // Save the account
            $account->save();

            return response()->json([
                'status' => 200,
                'message' => 'Account created successfully.',
                'account' => $account,
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 500,
                'message' => 'An error occurred while creating the account.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    // Update an account
    public function update(Request $request, $id)
    {
        try {
            // Find the account
            $account = Account::findOrFail($id);

            // Validate the request data
            $validatedData = $request->validate([
                'name' => 'required|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'parent_id' => 'nullable|exists:users,id',
            ]);

            // Update the account data
            $account->name = $validatedData['name'];
            $account->parent_id = auth()->user()->id;
            // Handle image upload if provided
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $image_name = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images/account/'), $image_name);
                $image_path = 'public/images/account/' . $image_name;
                $account->image = $image_path;
            }
            // Save the updated account
            $account->save();
            return response()->json([
                'status' => 200,
                'message' => 'Account updated successfully.',
                'account' => $account,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 500,
                'message' => 'An error occurred while updating the account.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    // Delete an account
    public function delete($id)
    {
        try {
            // Find the account
            $account = Account::findOrFail($id);
            // Delete the account
            $account->delete();

            return response()->json([
                'status' => 200,
                'message' => 'Account deleted successfully.',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 500,
                'message' => 'An error occurred while deleting the account.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    function myAccounts()
    {
        try {
            $accounts = Account::where('parent_id', auth()->user()->id)->get();
            return response()->json([
                'status' => 200,
                'data' => $accounts,
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 500,
                'message' => 'An error occurred while deleting the account.',
                'error' => $th->getMessage(),
            ], 500);
        }
    }
    // Create an Child account
    public function createAccount(Request $request)
    {
        try {
            // Validate the request data
            $validatedData = $request->validate([
                'name' => 'required|string',
                'image' => 'nullable',
            ]);

            // Create a new account instance
            $account = new Account();
            $account->name = $validatedData['name'];
            $account->parent_id = auth()->user()->id;

            // Handle image upload if provided
            if ($request->file('image')) {
                $image = $request->file('image');
                $imageName = time() . "." . $image->getClientOriginalExtension();
                $image->move(public_path('public/images/account/'), $imageName);
                $image_path = $imageName;
            } else {
                $image_path = 'public/images/account/default.png';
            }
            $account->image = $image_path;
            // Save the account
            $account->save();

            return redirect()->route('user.home')->with('message', 'Successfully Created');
        } catch (\Exception $e) {
            return back()->with('message', 'Please input valid image');
        }
    }
}
