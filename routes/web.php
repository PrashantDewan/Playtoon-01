<?php

use App\Http\Controllers\Account\AccountController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\GoogleAuthController;
use App\Http\Controllers\Book\BookController;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Rhymes\RhymesController;
use App\Http\Controllers\Rhymes\RhymesLevelController;
use App\Http\Controllers\Setting\SettingController;
use App\Http\Controllers\Subscription\SubscriptionPlanController;
use App\Http\Controllers\Subscription\UserSubscriptionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Audio\AudioController;
use App\Http\Controllers\Payment\PaypalCOntroller;
use App\Http\Controllers\Payment\StripePaymentController;
use App\Models\AccountSession;
use App\Models\Audio;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing.index');
});
// login

Route::post('/update-activity', function (Illuminate\Http\Request $request) {
    // Update the user's last activity timestamp in the session
    session(['last_activity' => now()]);

    $accountId = $request->input('account_id');

    // Find the AccountSession record based on the account_id
    $accountSession = AccountSession::where('account_id', $accountId)->latest()->first();

    if ($accountSession) {
        $accountSession->end_time = now()->addMinute();
        $accountSession->update();
    }

    // Return a response (optional)
    return response()->json(['success' => true]);
})->middleware('web');

Route::get('/mero-rhymes', function () {
    return view('frontend.rhymes.Rhymes');
});
Route::get('/mero-story', function () {
    return view('frontend.story.story');
});

Route::get('/mero-story-view', function () {
    return view('frontend.story.ViewStory');
});
Route::get('/mero-insight', function () {
    return view('frontend.insight.insight');
});

Route::get('/mero-rhymes-view', function () {
    return view('frontend.rhymes.view_rhymes');
});

// login
Route::get('/login', [AuthController::class, 'loginIndex'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('user.login');
// register
Route::get('/register', [AuthController::class, 'registerIndex']);
Route::post('/register', [AuthController::class, 'register'])->name('user.register');

// register new user
Route::post('/register-user', [AuthController::class, 'registerUser'])->name('new.user.register');

// Forget password
Route::get('/forget-password', [AuthController::class, 'forgetPassword'])->name('forget.password');
Route::post('/send-resetlink', [AuthController::class, 'sendLink'])->name('send.email');
Route::get('/reset/{token}', [AuthController::class, 'resetPassword'])->name('reset.password');
Route::post('/post/{token}', [AuthController::class, 'postResetPassword'])->name('post.resetPassword');

//google login
Route::get('auth/google', [GoogleAuthController::class, 'redirect'])->name('google_auth');
Route::get('auth/google/callback', [GoogleAuthController::class, 'callBackGoogle'])->name('callback');

// paypal routes
Route::get('payment', [PaypalCOntroller::class, 'payment'])->name('payment');
Route::get('cancel', [PaypalCOntroller::class, 'cancel'])->name('payment.cancel');
Route::get('payment/success', [PaypalCOntroller::class, 'success'])->name('payment.success');

// auth routes
Route::group(['middleware' => ['auth']], function () {
    // home route
    Route::get('/home', [AdminController::class, 'home'])->name('home');
    // logout
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    // subscription page
    Route::get('/subscription', [UserSubscriptionController::class, 'home'])->name('subscription');
    Route::get('/purchase-subscription/{id}', [UserSubscriptionController::class, 'purchsePlan'])->name('purchase.subscription');
    // stripe routes
    Route::get('stripe', [StripePaymentController::class, 'stripe'])->name('stripe');
    Route::post('stripe', [StripePaymentController::class, 'stripePost'])->name('stripe.post');
});

/* user routes */
Route::group(['prefix' => 'user', 'as' => 'user.', 'middleware' => ['auth', 'subsCheck']], function () {
    // user dashboard
    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
    // home page
    Route::get('/home', [UserController::class, 'showHome'])->name('home');
    // add user
    Route::get('/add-user', [UserController::class, 'addUser'])->name('add.user');
    // user select account
    Route::get('/select-account/{id}', [UserController::class, 'selectAccountType'])->name('select.account');
    // index page
    Route::get('/index', [UserController::class, 'showIndexPage'])->name('indexpage');
    // rhymes
    Route::get('/rhymes', [UserController::class, 'showRhymes'])->name('rhymes');
    // story
    Route::get('/story', [UserController::class, 'showStory'])->name('story');
    // single story
    Route::get('/story/id', [UserController::class, 'showSingleStory'])->name('single.story');

    // Add New child
    Route::post('/create-account/child', [AccountController::class, 'createAccount'])->name('create.childAccount');
});
/* admin routes */
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'admin']], function () {
    // admin dashboard
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    // create subscription plan
    Route::get('/create-subscription-plan', [SubscriptionPlanController::class, 'create'])->name('create.subscription.plan');
    // get all subscription plans
    Route::get('/subscription-plans', [SubscriptionPlanController::class, 'index'])->name('index.subscription.plan');
    // get subscription plan details
    Route::get('/subscription-plans/{id}', [SubscriptionPlanController::class, 'show'])->name('show.subscription.plan');
    // edit subscription plan
    Route::get('/subscription-plans/{id}/edit', [SubscriptionPlanController::class, 'edit'])->name('edit.subscription.plan');
    // subscription plan store
    Route::post('/subscription-plans', [SubscriptionPlanController::class, 'store'])->name('store.subscription.plan');
    // subscription plan update
    Route::post('/subscription-plans/{id}', [SubscriptionPlanController::class, 'update'])->name('update.subscription.plan');
    // subscription plan delete
    Route::get('/subscription-plans/{id}', [SubscriptionPlanController::class, 'destroy'])->name('delete.subscription.plan');
    // subscription plan status post
    Route::get('/subscription-plans/status/{id}', [SubscriptionPlanController::class, 'status'])->name('status.subscription.plan');
    // get user's subscriptions
    Route::get('/user-subscriptions', [UserSubscriptionController::class, 'index'])->name('user.subscriptions');
    // get user's subscription details
    Route::get('/user-subscriptions/{id}', [UserSubscriptionController::class, 'show']);
    // get all categories
    Route::get('/categories', [CategoryController::class, 'index'])->name('category.index');
    // Get a specific category
    Route::get('category/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    // Create a new category
    Route::get('create-category', [CategoryController::class, 'create'])->name('category.create');
    // store a new category
    Route::post('store-category', [CategoryController::class, 'store'])->name('category.store');
    // Change status of category
    Route::get('/category/change-status/{id}', [CategoryController::class, 'changeStatus'])->name('category.changeStatus');
    // Update a category
    Route::post('update-category/{id}', [CategoryController::class, 'update'])->name('category.update');
    // Delete a category
    Route::get('delete-category/{id}', [CategoryController::class, 'destroy'])->name('category.delete');
    // Get all rhymes levels
    Route::get('rhymes-level', [RhymesLevelController::class, 'index'])->name('rhymes.level.index');
    // create rhymes level
    Route::get('rhymes-level-create', [RhymesLevelController::class, 'create'])->name('rhymes.level.create');
    // Get a specific rhymes level
    Route::get('rhymes-level-edit/{id}', [RhymesLevelController::class, 'edit'])->name('rhymes.level.edit');
    // Create a new rhymes level
    Route::post('rhymes-level-store/', [RhymesLevelController::class, 'store'])->name('rhymes.level.store');
    // Update a rhymes level
    Route::post('rhymes-level-update/{id}', [RhymesLevelController::class, 'update'])->name('rhymes.level.update');
    // Delete a rhymes level
    Route::get('rhymes-level-delete/{id}', [RhymesLevelController::class, 'destroy'])->name('rhymes.level.delete');
    // Index - Get all rhymes
    Route::get('/rhymes', [RhymesController::class, 'index'])->name('rhymes.index');
    // Create a new rhyme
    Route::get('/rhymes-create', [RhymesController::class, 'create'])->name('rhymes.create');
    // Store - Create a new rhyme
    Route::post('/rhymes', [RhymesController::class, 'store'])->name('rhymes.store');
    // Edit - Get a specific rhyme for editing
    Route::get('/rhymes/{id}/edit', [RhymesController::class, 'edit'])->name('rhymes.edit');
    // Update - Update a specific rhyme
    Route::post('/rhymes/{id}', [RhymesController::class, 'update'])->name('rhymes.update');
    // Delete - Delete a specific rhyme
    Route::get('/rhymes/{id}', [RhymesController::class, 'destroy'])->name('rhymes.delete');
    // add video
    Route::get('rhymes/add-video/{id}', [RhymesController::class, 'addVideo'])->name('rhymes.add.video');
    // upload video
    Route::post('rhymes/upload-video/{id}', [RhymesController::class, 'uploadVideo'])->name('rhymes.upload.video');
    // Change Status - Change the status of a specific rhyme
    Route::get('/rhymes/{id}/status', [RhymesController::class, 'changeStatus'])->name('rhymes.change.status');

    // Display all books
    Route::get('/books', [BookController::class, 'index'])->name('books.index');
    // Show the form to create a new book
    Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
    // Store a newly created book
    Route::post('/books', [BookController::class, 'store'])->name('books.store');
    // Show the form to edit an existing book
    Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');
    // Update the specified book
    Route::post('/books/{id}', [BookController::class, 'update'])->name('books.update');
    // change status
    Route::get('/books/change-status/{id}', [BookController::class, 'changeStatus'])->name('books.changeStatus');
    // Delete the specified book
    Route::get('/books/{id}', [BookController::class, 'delete'])->name('books.delete');
    // add resources of book
    Route::get('book/resources/{id}', [BookController::class, 'addResources'])->name('books.addResource');
    // store the content
    Route::post('book/add-resources/{id}', [BookController::class, 'storeResource'])->name('book.store.content');
    // show resource page
    Route::post('book/resource-page/{id}', [BookController::class, 'storeResourcePage'])->name('book.resource.page');
    // delete book pages
    Route::get('book/resources/delete-page/{id}', [BookController::class, 'delteResourcePage'])->name('books.delete.page');

    // Index- get all audio
    Route::get('book/audio', [AudioController::class, 'index'])->name('audio.index');
    // Create new audio
    Route::get('book/audio/create', [AudioController::class, 'create'])->name('audio.create');
    // Store new audio
    Route::post('book/audio/store', [AudioController::class, 'store'])->name('audio.store');
    // Change Status of audio
    Route::get('/books/audio/change-status/{id}', [AudioController::class, 'changeStatus'])->name('audio.changeStatus');
    // Delete audio
    Route::get('/books/audio/{id}', [AudioController::class, 'destroy'])->name('audio.delete');
    // Edit Audio
    Route::get('/books/{id}/edit', [AudioController::class, 'edit'])->name('audio.edit');
    // Update Audio
    Route::put('/books/update/{id}', [AudioController::class, 'update'])->name('audio.update');

    // setting routes
    // change password
    Route::get('/setting/password', [SettingController::class, 'showPasswordForm'])->name('setting.changePassword');
});
