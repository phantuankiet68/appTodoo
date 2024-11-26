<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $subject;
    public $messages;

    public function __construct($data)
    {
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->subject = $data['subject'];
        $this->messages = $data['messages'];
    }

    public function build()
    {
        return $this->subject($this->subject)
                    ->view('emails.contactform')
                    ->with([
                        'name' => $this->name,
                        'email' => $this->email,
                        'messages' => $this->messages,
                    ]);
    }
    
}
