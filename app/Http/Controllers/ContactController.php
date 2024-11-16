<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Exception;
class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string'
        ]);

        try {
            // Create contact record
            $contact = Contact::create($validated);

            // Send email notification
            $this->sendEmailNotification($contact);

            // Return success response
            return back()->with('success', 'Thank you for your message. We will get back to you soon!');

        } catch (Exception $e) {
            // Log error
            Log::error('Contact form error: ' . $e->getMessage());

            // Return error response
            return back()->with('error', 'Sorry, something went wrong. Please try again later.');
        }
    }

    private function sendEmailNotification($contact)
    {
        // Email configuration should be in .env file
        $adminEmail = config('mail.admin_email', 'your@email.com');

        // Send email using Laravel's Mail facade
        Mail::send('emails.contact', ['contact' => $contact], function ($message) use ($contact, $adminEmail) {
            $message->from($contact->email, $contact->name);
            $message->to($adminEmail);
            $message->subject('New Contact Form Submission: ' . $contact->subject);
        });
    }
}