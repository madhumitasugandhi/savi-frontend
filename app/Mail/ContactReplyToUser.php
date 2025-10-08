<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactReplyToUser extends Mailable
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

        $htmlContent = "
            <html>
                <body style='font-family: Arial, sans-serif; line-height: 1.6;'>
                    <h2>Hello $name,</h2>
                    <p>Thank you for reaching out to us. We've received your message and will get back to you soon.</p>
                    <p>We appreciate your interest!</p>
                    <p>Best regards,<br>The Team</p>
                </body>
            </html>
        ";

        return $this->subject('Thanks for Contacting Us')
                    ->html($htmlContent);
    }
}
