<?php

namespace App\Console\Commands;

use App\Jobs\SendEmailJob;
use App\Models\Email;
use Illuminate\Console\Command;

class SendMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:send {message} {users*} {--S|subject=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send email';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $users = $this->argument('users');
        $msg = $this->argument('message');
        $subject = $this->option('subject');

        array_map(function ($user) use ($msg, $subject) {

            if (filter_var($user, FILTER_VALIDATE_EMAIL)) {
                Email::create([
                    'email' => $user,
                    'body' => $msg,
                ]);
                dispatch(new SendEmailJob($user, $msg, $subject));
            } else {
                $this->error('invalid email');
            }

        }, $users);

        return Command::SUCCESS;
    }
}
