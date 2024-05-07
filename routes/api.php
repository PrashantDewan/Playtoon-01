<?php

use App\Http\Controllers\Account\AccountController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\GoogleAuthController;
use App\Http\Controllers\Book\BookController;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Rhymes\RhymesController;
use App\Http\Controllers\Rhymes\RhymesLevelController;
use App\Http\Controllers\Subscription\SubscriptionPlanController;
use App\Http\Controllers\Subscription\UserSubscriptionController;
use App\Http\Controllers\Audio\AudioController;
use Illuminate\Support\Facades\Route;


// login
Route::post('/login', [AuthController::class, 'userLogin']);
// register
Route::post('/register', [AuthController::class, 'userRegister']);
//google login
Route::get('auth/google', [GoogleAuthController::class, 'redirect']);
Route::get('auth/google/callback', [GoogleAuthController::class, 'callBackGoogle']);

/* user routes */
// Route::group(['middleware' => ['isAuth', 'auth:sanctum', 'hasSubscription']], function () {
Route::group(['middleware' => ['auth:sanctum']], function () {
    // check if user is authenticated or not
    Route::get('/check-user', [AuthController::class, 'checkUser']);
    // get all subscription plans
    Route::get('/subscription-plans', [SubscriptionPlanController::class, 'plans']);
    // user's subscribed plans
    Route::get('/user-subscriptions', [UserSubscriptionController::class, 'getUserSubscription']);
    // user's subscribed plan details
    Route::get('/user-subscriptions/{id}', [UserSubscriptionController::class, 'show']);
    // user subscribtion store
    Route::post('/user-subscriptions', [UserSubscriptionController::class, 'store']);
    // user subscribtion update
    Route::post('/user-subscriptions/{id}', [UserSubscriptionController::class, 'update']);
    // user subscribtion delete
    Route::get('/user-subscriptions/{id}', [UserSubscriptionController::class, 'destroy']);
    // get categories
    Route::get('/get-categories', [CategoryController::class, 'activeCat']);
    // get rhymes level
    Route::get('/get-rhymes-level', [RhymesLevelController::class, 'getRhymesLevel']);
    // get rhhymes
    Route::get('/get-rhymes', [RhymesController::class, 'getRhymes']);
    // Account create
    Route::post('/accounts', [AccountController::class, 'create']);
    // account update
    Route::post('/accounts/{id}', [AccountController::class, 'update']);
    // account delete
    Route::get('/accounts/{id}', [AccountController::class, 'delete']);
    // get my accounts
    Route::get('/my-accounts', [AccountController::class, 'myAccounts']);
    // get books
    Route::get('/get-books', [BookController::class, 'getBooks']);
    // get audio
    Route::get('/get-audio', [AudioController::class, 'getAudios']);
});
