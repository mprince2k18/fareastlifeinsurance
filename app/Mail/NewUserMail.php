<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewUserMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

     public $name = "";
     public $email = "";
     public $password = "";


    public function __construct($name,$email,$password)
    {
        $this->name=$name;
        $this->email=$email;
        $this->password=$password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      $name ="";
      $email ="";
      $password ="";
      return $this->from('mprince2k16@gmail.com','Moohammad Prince')
                  ->subject('You Have Been Added As A New User')
                  ->view('dashboard.email.new_user',compact('name','email','password'));
    }
}
