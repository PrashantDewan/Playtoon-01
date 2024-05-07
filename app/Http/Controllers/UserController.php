<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\AccountSession;
use App\Models\Books;
use App\Models\Rhymes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        // return view('frontend.index');
        return redirect()->route('user.home');
    }

    public function showHome()
    {
        $accounts = Account::where('parent_id', auth()->user()->id)->get();
        return view('frontend.index', compact('accounts'));
    }

    public function addUser()
    {
        return view('frontend.addUser.addUser');
    }


    public function selectAccountType($id)
    {
        try {
            $account = Account::find($id);
            if ($account->parent_id == auth()->user()->id) {
               
                // do some work
                $accountSession = new AccountSession();
                $accountSession->account_id = $id;
                $accountSession->start_time = now();
                $accountSession->end_time = now();
                $accountSession->save();
                // dd('yaha x');
                // Track user activity
                Session::put('accountSessionId', $accountSession->id);
                Session::put('lastActivityTime', $accountSession->end_time);

                return redirect()->route('user.indexpage');
            }
        } catch (\Throwable $th) {
            return redirect()->back();
        }
    }
    public function showIndexPage()
    {
        return view('frontend.home.home');
    }
    public function showRhymes()
    {
        try {
            $rhymes = Rhymes::where('status',1)->get();
            return view('frontend.rhymes.rhymes', compact('rhymes'));
        } catch (\Exception $e) {
            return response()->json([
                'status' => 500,
                'error' => $e->getMessage()
            ], 500);
        }
    }
    public function showStory()
    {
        try {
            $books = Books::where('status','active')->Paginate(4);
            return view('frontend.story.story', compact('books'));
        } catch (\Exception $e) {
            return response()->json([
                'status' => 500,
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function showSingleStory()
    {
        return view('frontend.story.viewStory');

        return view('frontend.home.Home');
    }
}
