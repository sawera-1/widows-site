<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Enquiry;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
            'attachment' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:5120', // 5MB limit
        ]);

        $filePath = null;
        if ($request->hasFile('attachment')) {
            // Securely store the file in local storage (not public)
            $filePath = $request->file('attachment')->store('enquiries', 'local');
        }

        Enquiry::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'subject' => $validated['subject'] ?? 'General Inquiry',
            'message' => $validated['message'],
            'attachment' => $filePath,
        ]);

        return back()->with('success', 'Thank you! Your message has been sent successfully. Our team will get back to you shortly.');
    }
}
