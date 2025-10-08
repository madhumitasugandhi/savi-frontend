<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactToAdmin;
use App\Mail\ContactReplyToUser;

class ContactControllers extends Controller
{
    public function submitContactForm(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:3000',
        ]);

        $data = $request->only(['name', 'email', 'subject', 'message']);

        // 📩 Send email to Admin
        Mail::to('savisawarkars@gmail.com')->send(new ContactToAdmin($data));

        // 📬 Send reply to User
        Mail::to($data['email'])->send(new ContactReplyToUser($data));

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
