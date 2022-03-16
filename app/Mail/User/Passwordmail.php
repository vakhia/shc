<?php

namespace App\Mail\User;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Passwordmail extends Mailable
{
    use Queueable, SerializesModels;

    public $generated_password;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($generated_password)
    {

        $this->generated_password = $generated_password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.passwordmail',);
    }
}
