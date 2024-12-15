<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;



    public function __construct($data)
    {
        $this->data = $data;
    }

public function build()
{
    return $this->view('emails.contact-form')
    ->with([
        'name' => $this->data['name'],
        'email' => $this->data['email'],
        'message' => $this->data['message'],
    ])
    ->subject('Inquiry')
    ->from('kamuzuacademy80@example.com', 'Kamuzu Academy')
    ->to('thindwachisomo20@gmail.com');
}

}