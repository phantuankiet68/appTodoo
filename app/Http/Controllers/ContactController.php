<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    // public function index()
    // {
    //     return view('emails.contactform');
    // }
    public function sendContactForm(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);
        
        // Tạo mảng dữ liệu
        $data = array(
            'name' => $validated['name'],
            'email' => $validated['email'],
            'subject' => $validated['subject'],
            'messages' => $validated['message'], // Lưu ý: 'messages' thay vì 'message'
        );

        try {
            // Gửi email với mảng dữ liệu
            Mail::to('tuankietity@gmail.com')->send(new ContactFormMail($data));

            return back()->with('success', 'Your message has been sent successfully!');
        } catch (\Exception $e) {
            // Nếu có lỗi, trả về thông báo lỗi
            return back()->with('error', 'There was an issue sending your message: ' . $e->getMessage());
        }
    }
}
