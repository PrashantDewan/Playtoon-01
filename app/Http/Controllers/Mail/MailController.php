<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function sendResetEmail($email){
        return User::where("email","=", $email)-> first();
    }
}
