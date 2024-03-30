<?php

namespace App\Mail;

use Illuminate\Mail\Mailables\Address;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EnquiryMail extends Mailable
{
    use Queueable, SerializesModels;

    public $msg, $name, $email;

    public function __construct($msg, $name, $email)
    {
        $this->msg = $msg;
        $this->name = $name;
        $this->email = $email;
    }

    public function envelope()
    {
        return new Envelope(
            subject: 'An Enquiry received from ' . $this->name,
            from: new Address($this->email,  $this->name),
        );
    }

    public function content()
    {
        return new Content(
            view: 'mail.enquiry',
        );
    }

    public function attachments()
    {
        return [];
    }
}
