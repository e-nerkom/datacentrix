<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function sendMessage(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $newMessage = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ]);

        // if ($newMessage) {
        //     // sent email notification here

        // }

        if (!$newMessage) {
            return redirect('/contact')->with('err', 'Sent message failed. Please try again..');
        }

        return redirect('/contact')->with('message', 'Message sent...');
    }

}
