@extends('admin.layouts.app')

@section('content')

<div style="margin-bottom:28px;">
    <h1 class="page-title">Enquiries</h1>
    <p class="page-subtitle" style="margin-bottom:0;">Manage customer messages and support tickets.</p>
</div>

<!-- ─── STAT CARDS ─── -->
<div class="grid-cards" style="grid-template-columns: repeat(3, 1fr); margin-bottom: 24px;">
    <div class="stat-card">
        <div class="stat-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
        </div>
        <div class="stat-card-title">Total Enquiries</div>
        <div class="stat-card-value">{{ $enquiries->total() ?? 0 }}</div>
    </div>
    <div class="stat-card">
        <div class="stat-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
        <div class="stat-card-title">Pending</div>
        <div class="stat-card-value">{{ \App\Models\Enquiry::where('status', 'Pending')->count() ?? 0 }}</div>
    </div>
    <div class="stat-card">
        <div class="stat-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 13l4 4L19 7"/></svg>
        </div>
        <div class="stat-card-title">Resolved</div>
        <div class="stat-card-value">{{ \App\Models\Enquiry::where('status', 'Resolved')->count() ?? 0 }}</div>
    </div>
</div>

@if(session('success'))
    <div style="background-color: #d1fae5; color: #065f46; padding: 15px; border-radius: 0; margin-bottom: 20px;">
        {{ session('success') }}
    </div>
@endif

<div class="card">
    @if($enquiries->count() > 0)
        <div class="table-responsive">
            <table class="admin-table">
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
                        <tr style="{{ !$enquiry->read_status ? 'font-weight: 600; background: #fafafa;' : '' }}">
                            <td style="color:#6B6B6B;">{{ $enquiry->created_at->format('d/m/Y H:i') }}</td>
                            <td><strong style="color:var(--text-main);">{{ $enquiry->name }}</strong></td>
                            <td><a href="mailto:{{ $enquiry->email }}" style="color:#6B6B6B;">{{ $enquiry->email }}</a></td>
                            <td>{{ $enquiry->subject ?? 'General Inquiry' }}</td>
                            <td>
                                <span class="badge {{ $enquiry->status === 'Pending' ? 'badge-dark' : ($enquiry->status === 'Resolved' || $enquiry->status === 'Closed' ? 'badge-success' : 'badge-outline') }}" style="text-transform: capitalize;">
                                    {{ $enquiry->status }}
                                </span>
                            </td>
                            <td>
                                @if($enquiry->reply_status === 'Replied')
                                    <span class="badge badge-success">Replied</span>
                                @else
                                    <span class="badge badge-outline">Not Replied</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.enquiries.show', $enquiry) }}" class="btn btn-sm btn-primary">View</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        @if($enquiries->hasPages())
            <div style="margin-top: 20px;">
                {{ $enquiries->links() }}
            </div>
        @endif
    @else
        <p style="text-align: center; padding: 40px 16px; color:#999; margin: 0;">No enquiries found.</p>
    @endif
</div>

@endsection
