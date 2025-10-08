<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactToAdmin extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        $name = $this->data['name'];
        $email = $this->data['email'];
        $subject = $this->data['subject'];
        $message = $this->data['message'];

        $htmlContent = "
            <html>
                <body style='font-family: Arial, sans-serif; line-height: 1.6;'>
                    <h2>New Contact Form Submission</h2>
                    <p><strong>Name:</strong> $name</p>
                    <p><strong>Email:</strong> $email</p>
                    <p><strong>Subject:</strong> $subject</p>
                    <p><strong>Message:</strong><br>$message</p>
                </body>
            </html>
        ";

        return $this->subject('New Contact Form Submission')
                    ->html($htmlContent);
    }
}
