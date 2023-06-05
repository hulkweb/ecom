<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PasswordReset extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $token;
    public $website_url;
    public function __construct($token)
    {
        //
        $this->token=$token;
        $this->website_url=settings()['website_url'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {    $website_name=settings()['website_name'];
        
        return $this->subject(" $website_name : Password Reset")-> markdown('emails.password_resets');
    }
}
