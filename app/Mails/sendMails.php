<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\jobs\sendMailJob;


class sendMails extends Mailable
{
    use Queueable, SerializesModels;
public $mailBody;
    /**
     * Create a new message instance.
     */
    public function __construct($mailBody)
    {
        $this->mailBody=$mailBody;
    }

    public function build(){
        return $this->subject("new mail send")
        ->view("sendmail.mail")
        ->with(['job' => $this->mailBody]);
    }
}
