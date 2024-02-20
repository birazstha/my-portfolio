<?php

namespace App\Listeners;

use App\Mail\EnquiryMail;
use App\Events\EnquiryEvent;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class EnquiryListener implements ShouldQueue
{
    use Queueable;

    public function handle(EnquiryEvent $enquiry)
    {

        $email = $enquiry->data->email;
        $message = $enquiry->data->message;
        $name = $enquiry->data->name;

        try {
            Mail::to(frontendConfig('email'))->send(new EnquiryMail($message, $name, $email));
        } catch (\Exception $e) {
            dd($e);
        }
    }
}
