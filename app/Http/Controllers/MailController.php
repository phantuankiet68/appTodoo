<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\CustomEmail;

class MailController extends Controller
{
    public function sendMail(Request $request)
    {
        $request->validate([
            'to_email' => 'required|email',
            'subject' => 'required|string|max:255',
            'description' => 'required|string',
            'file.*' => 'nullable|file|max:5120',
        ]);
    
        Mail::to($request->to_email)->send(new CustomEmail(
            $request->subject,
            $request->description,
            $request->file('file')
        ));
    
        return back()->with('success', 'Email đã được gửi thành công!');
    }
}
