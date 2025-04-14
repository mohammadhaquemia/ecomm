<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Notifications\SendContactForm;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'subject' => 'required|string|max:150',
            'message' => 'required|string|max:1000',
        ]);

        Mail::to('gelid33227@anlocc.com')->send(new ContactFormMail($data));

        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
