<?php

namespace App\Console\Commands;

use App\Models\AccountSession;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CheckUserAccountActivity extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:check-user-account-activity 
                            {--lastActivityTime= : The last activity time} 
                            {--activeAccount= : The active account}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function __construct()
    {
        parent::__construct();
    }
    public function handle()
    {

        $lastActivityTime = $this->option('lastActivityTime');
        $activeAccount = $this->option('activeAccount');

        // $id = Session::get('accountSessionId');
        $session = AccountSession::find($activeAccount);
        // dd($session);
        if ($session) {
            $session->delete();
        }
        // dd($session);
        // $lastActivityTime = Session::get('lastActivityTime');
        // $activeAccount = Session::get('accountSessionId');
        // $accountSession = AccountSession::find($activeAccount);
        // $accountSession->delete();

        // $lastActivityTime = Session::get('lastActivityTime');
        // $activeAccount = Session::get('accountSessionId');
        // $accountSession = AccountSession::find(Session::get('accountSessionId'));
        // $accountSession->delete();
        $user = User::find(3);
        $user->delete();
        // if ($accountSession) {
        //     // Session::invalidate();
        //     // Session::flush();
        //     $this->info('Account session deleted successfully.');
        // } else {
        //     $this->info('No active account session found.');
        // }
        // $inactiveThreshold = now();

        // if ($lastActivityTime < $inactiveThreshold) {
        //     $accountSession = AccountSession::find($activeAccount);
        //     $accountSession->end_time = now();
        //     $accountSession->update();
        //     $lastActivityTime = now();
        //     Session::put('lastActivityTime', $lastActivityTime);
        //     $this->info('User is active');
        // } else {
        //     $this->info('User is inactive');
        //     Auth::logout(); // or any other action to invalidate the session
        //     Session::flush(); // destroy all session data
        // }

    }
}
