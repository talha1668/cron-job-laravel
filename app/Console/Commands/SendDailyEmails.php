<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use App\Mail\DailyReminderEmail;
use Illuminate\Support\Facades\Mail;

class SendDailyEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-daily-emails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()

    {

        $user = User::all();

        foreach ($user as $a) {



            Mail::raw("This is automatically generated Hourly Update", function ($message) use ($a) {

                $message->from('talha.awan1668@gmail.com');

                $message->to($a->email)->subject('Hourly Update');
            });
        }



        $this->info('Hourly Update has been send successfully');
    }
}
