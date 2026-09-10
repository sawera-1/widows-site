<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
            'attachment' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:5120', // 5MB limit
        ]);

        $filePath = null;
        if ($request->hasFile('attachment')) {
            // Securely store the file in the 'contacts' directory
            $filePath = $request->file('attachment')->store('contacts', 'public');
            $validated['attachment_path'] = $filePath;
        }

        // Normally we'd send an email or save to DB here.
        // Mail::to('sales@company.co.uk')->send(new ContactFormSubmitted($validated));
        
        // Log for debugging since there's no actual mail service set up
        \Log::info('Contact Form Submitted', $validated);

        return back()->with('success', 'Thank you! Your message has been sent successfully. Our team will get back to you shortly.');
    }
}
