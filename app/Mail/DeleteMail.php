<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class DeleteMail extends Mailable
{
    use Queueable, SerializesModels;

    // public $videogame;

    public function __construct()
    {
        // $this -> $videogame = $data;
    }

    public function build()
    {
        return $this    -> from('Mia@mail.com')
                        -> view('mails.textMailDelete');
    }
}
