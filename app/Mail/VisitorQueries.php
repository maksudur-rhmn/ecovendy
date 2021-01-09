<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VisitorQueries extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

     public $name = '';
     public $email = '';
     public $phone = '';
     public $company = '';
     public $message = '';

    public function __construct($name, $email, $phone, $message, $company)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->company = $company;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      $name = '';
      $email = '';
      $phone = '';
      $company = '';
      $message = '';
     return $this->markdown('mail.contact', compact('name', 'email', 'phone', 'message', 'company'));
    }
}
