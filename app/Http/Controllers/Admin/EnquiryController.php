<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Enquiry;
use App\Models\InquiryReply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class EnquiryController extends Controller
{
    public function index()
    {
        $enquiries = Enquiry::latest()->paginate(15);
        return view('admin.enquiries.index', compact('enquiries'));
    }

    public function show(Enquiry $enquiry)
    {
        // Mark as read when opened
        if (!$enquiry->read_status) {
            $enquiry->update(['read_status' => true]);
        }

        $enquiry->load('replies.admin');
        
        return view('admin.enquiries.show', compact('enquiry'));
    }

    public function reply(Request $request, Enquiry $enquiry)
    {
        $validated = $request->validate([
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Send the email to the customer
        Mail::raw($validated['message'], function ($mail) use ($enquiry, $validated) {
            $mail->to($enquiry->email)
                 ->subject($validated['subject']);
        });

        InquiryReply::create([
            'enquiry_id' => $enquiry->id,
            'admin_id' => Auth::id(),
            'message' => $validated['message'],
            'recipient_email' => $enquiry->email,
            'subject' => $validated['subject'],
            'status' => 'Sent',
        ]);

        $enquiry->update([
            'reply_status' => 'Replied',
            'replied_at' => now(),
        ]);

        return redirect()->route('admin.enquiries.show', $enquiry)->with('success', 'Reply sent successfully.');
    }

    public function updateStatus(Request $request, Enquiry $enquiry)
    {
        $validated = $request->validate([
            'status' => 'required|string|in:Pending,In Progress,Resolved,Closed',
            'admin_notes' => 'nullable|string',
        ]);

        $enquiry->update([
            'status' => $validated['status'],
            'admin_notes' => $validated['admin_notes'],
        ]);

        return redirect()->route('admin.enquiries.show', $enquiry)->with('success', 'Enquiry updated successfully.');
    }

    public function downloadAttachment(Enquiry $enquiry)
    {
        if (!$enquiry->attachment || !Storage::disk('local')->exists($enquiry->attachment)) {
            abort(404, 'Attachment not found.');
        }

        return Storage::disk('local')->download($enquiry->attachment);
    }
}
