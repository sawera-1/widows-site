@extends('admin.layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="page-title mb-0">Enquiry from {{ $enquiry->name }}</h1>
    <a href="{{ route('admin.enquiries.index') }}" class="btn btn-secondary">Back to Enquiries</a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="row">
    <div class="col-md-8">
        <!-- Message Details -->
        <div class="card mb-4">
            <h3>Message Details</h3>
            <hr>
            <div class="mb-3">
                <strong>From:</strong> {{ $enquiry->name }} &lt;{{ $enquiry->email }}&gt;
            </div>
            <div class="mb-3">
                <strong>Date:</strong> {{ $enquiry->created_at->format('d/m/Y H:i') }}
            </div>
            <div class="mb-3">
                <strong>Subject:</strong> {{ $enquiry->subject ?? 'General Inquiry' }}
            </div>
            
            @if($enquiry->attachment)
                <div class="mb-3">
                    <strong>Attachment:</strong> 
                    <a href="{{ route('admin.enquiries.attachment', $enquiry) }}" class="btn btn-sm btn-outline-primary ms-2" target="_blank">Download Attachment</a>
                </div>
            @endif

            <div class="mt-4 p-3" style="background: #f8f9fa; border: 1px solid #dee2e6; border-radius: 4px; white-space: pre-wrap;">{{ $enquiry->message }}</div>
        </div>

        <!-- Replies History -->
        @if($enquiry->replies->count() > 0)
            <div class="card mb-4">
                <h3>Reply History</h3>
                <hr>
                @foreach($enquiry->replies as $reply)
                    <div class="mb-4 pb-4 border-bottom">
                        <div class="d-flex justify-content-between mb-2">
                            <strong>{{ $reply->admin ? $reply->admin->name : 'Admin' }} replied:</strong>
                            <small class="text-muted">{{ $reply->created_at->format('d/m/Y H:i') }}</small>
                        </div>
                        <div class="mb-2"><strong>Subject:</strong> {{ $reply->subject }}</div>
                        <div class="p-3 bg-light border rounded" style="white-space: pre-wrap;">{{ $reply->message }}</div>
                    </div>
                @endforeach
            </div>
        @endif

        <!-- Reply Form -->
        <div class="card">
            <h3>Send a Reply</h3>
            <hr>
            <form action="{{ route('admin.enquiries.reply', $enquiry) }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label class="form-label">To:</label>
                    <input type="text" class="form-control" value="{{ $enquiry->email }}" disabled>
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Subject:</label>
                    <input type="text" name="subject" class="form-control" value="Re: {{ $enquiry->subject ?? 'Your Inquiry' }}" required>
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Message:</label>
                    <textarea name="message" class="form-control" rows="6" required></textarea>
                    <small class="form-text text-muted">This message will be sent to the customer's email address.</small>
                </div>
                <button type="submit" class="btn btn-primary">Send Reply</button>
            </form>
        </div>
    </div>

    <!-- Sidebar: Meta & Status -->
    <div class="col-md-4">
        <div class="card">
            <h3>Enquiry Status</h3>
            <hr>
            <form action="{{ route('admin.enquiries.update_status', $enquiry) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="form-group mb-3">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-control">
                        <option value="Pending" {{ $enquiry->status === 'Pending' ? 'selected' : '' }}>Pending</option>
                        <option value="In Progress" {{ $enquiry->status === 'In Progress' ? 'selected' : '' }}>In Progress</option>
                        <option value="Resolved" {{ $enquiry->status === 'Resolved' ? 'selected' : '' }}>Resolved</option>
                        <option value="Closed" {{ $enquiry->status === 'Closed' ? 'selected' : '' }}>Closed</option>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label class="form-label">Admin Notes (Internal)</label>
                    <textarea name="admin_notes" class="form-control" rows="4" placeholder="Private notes for staff...">{{ $enquiry->admin_notes }}</textarea>
                </div>

                <button type="submit" class="btn btn-secondary w-100">Update Status</button>
            </form>
        </div>
    </div>
</div>

@endsection
