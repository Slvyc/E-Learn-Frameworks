<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        return view('emails.contact');
    }

     public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $details = [
            'title' => 'Message from Contact Form',
            'name' => $request->name,
            'email' => $request->email,
            'body' => $request->message
        ];

        Mail::send('emails.contact', $details, function ($message) use ($request) {
            $message->to('elearnframework@gmail.com')
                    ->subject('New Contact Message from ' . $request->name);
        });

        return back()->with('success', 'Message sent successfully!');
    }
}
