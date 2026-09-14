@extends('admin.layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="page-title mb-0">Enquiries</h1>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="card">
    @if($enquiries->count() > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Status</th>
                    <th>Reply Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($enquiries as $enquiry)
                    <tr style="{{ !$enquiry->read_status ? 'font-weight: bold; background: #f9f9f9;' : '' }}">
                        <td>{{ $enquiry->created_at->format('d/m/Y H:i') }}</td>
                        <td>{{ $enquiry->name }}</td>
                        <td>{{ $enquiry->email }}</td>
                        <td>{{ $enquiry->subject ?? 'General Inquiry' }}</td>
                        <td>
                            <span class="badge {{ $enquiry->status === 'Pending' ? 'bg-warning' : ($enquiry->status === 'Resolved' || $enquiry->status === 'Closed' ? 'bg-success' : 'bg-primary') }}">
                                {{ $enquiry->status }}
                            </span>
                        </td>
                        <td>
                            @if($enquiry->reply_status === 'Replied')
                                <span class="badge bg-success">Replied</span>
                            @else
                                <span class="badge bg-secondary">Not Replied</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.enquiries.show', $enquiry) }}" class="btn btn-sm btn-primary">View</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
        <div class="mt-4">
            {{ $enquiries->links() }}
        </div>
    @else
        <p class="mb-0">No enquiries found.</p>
    @endif
</div>

@endsection
