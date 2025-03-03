<?php

namespace App\Jobs;

use App\Mail\sendMails;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;

class sendMailJob implements ShouldQueue
{
    use Queueable;
public $mailBody;
    /**
     * Create a new job instance.
     */
    public function __construct($mailBody)
    {
       $this->mailBody=$mailBody;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to("example@gmail.com")->send(new sendMails($this->mailBody));
    }
}
