@extends('layouts.app')

@section('title', 'Contact Us — Modern UPVC Windows')

@push('styles')
<style>
    .contact-section { padding: clamp(40px, 6vw, 80px) 0; }
    .contact-container { width: 100%; max-width: 1280px; margin: 0 auto; padding: 0 20px; }
    
    .contact-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 40px;
        align-items: stretch;
    }
    @media(min-width: 900px) {
        .contact-grid { grid-template-columns: 1fr 1fr; gap: 40px; }
    }
    
    .contact-info {
        display: flex;
        flex-direction: column;
        gap: 32px;
        background: #f9fafb;
        padding: clamp(24px, 4vw, 40px);
        border: 1px solid #e5e7eb;
        height: 100%;
    }
    .dark .contact-info { background: #111; border-color: #333; }
    .contact-header {
        margin-bottom: 24px;
    }
    .contact-header h1 {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 16px;
    }
    .contact-header p {
        font-size: 1.1rem;
        color: var(--mono-grey);
        line-height: 1.6;
    }
    
    .info-block {
        display: flex;
        gap: 20px;
        align-items: flex-start;
        padding-bottom: 24px;
        border-bottom: 1px dashed #e5e7eb;
    }
    .info-block:last-child {
        border-bottom: none;
        padding-bottom: 0;
    }
    .dark .info-block { border-color: #333; }
    
    .icon-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 48px;
        height: 48px;
        background: #fff;
        border: 1px solid #ccc;
        flex-shrink: 0;
    }
    .dark .icon-wrapper { background: #000; border-color: #444; }
    
    .info-icon {
        width: 24px;
        height: 24px;
        color: #000;
    }
    .dark .info-icon { color: #fff; }
    .info-content h3 {
        font-size: 1.1rem;
        font-weight: 600;
        margin-bottom: 4px;
    }
    .info-content p, .info-content a {
        font-size: 1rem;
        color: var(--mono-grey);
        text-decoration: none;
        line-height: 1.5;
    }
    .info-content a:hover {
        color: #000;
        text-decoration: underline;
    }
    .dark .info-content a:hover { color: #fff; }

    /* Form Styles */
    .contact-form {
        background: #f9fafb;
        padding: clamp(24px, 4vw, 40px);
        border: 1px solid #e5e7eb;
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    .dark .contact-form {
        background: #111;
        border-color: #333;
    }
    
    .form-row {
        display: grid;
        grid-template-columns: 1fr;
        gap: 20px;
        margin-bottom: 20px;
    }
    @media(min-width: 600px) {
        .form-row.two-col { grid-template-columns: 1fr 1fr; }
    }
    
    .form-group {
        display: flex;
        flex-direction: column;
        gap: 8px;
        margin-bottom: 20px;
    }
    .form-group label {
        font-size: 0.95rem;
        font-weight: 600;
    }
    
    .form-control {
        width: 100%;
        padding: 14px;
        border: 1px solid #ccc;
        border-radius: 0;
        background: #fff;
        color: #000;
        font-family: inherit;
        font-size: 1rem;
        transition: border-color 0.2s, box-shadow 0.2s;
    }
    .dark .form-control {
        background: #000;
        color: #fff;
        border-color: #444;
    }
    .form-control::placeholder {
        color: #9ca3af;
    }
    .form-control:hover { border-color: #000; }
    .dark .form-control:hover { border-color: #fff; }
    .form-control:focus {
        outline: none;
        border-color: #666;
        box-shadow: 0 0 0 1px #666;
    }
    .dark .form-control:focus {
        border-color: #aaa;
        box-shadow: 0 0 0 1px #aaa;
    }
    
    textarea.form-control {
        resize: vertical;
        min-height: 120px;
    }
    
    .file-upload {
        position: relative;
        border: 2px dashed #ccc;
        padding: 32px 20px;
        text-align: center;
        background: #fff;
        transition: border-color 0.2s, background 0.2s;
        cursor: pointer;
    }
    .dark .file-upload { background: #000; border-color: #444; }
    .file-upload:hover { border-color: #000; background: #fafafa; }
    .dark .file-upload:hover { border-color: #fff; background: #0a0a0a; }
    .file-upload input[type="file"] {
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        opacity: 0;
        cursor: pointer;
    }
    .file-icon {
        width: 32px; height: 32px;
        margin: 0 auto 12px;
        color: #666;
    }
    .dark .file-icon { color: #a3a3a3; }
    
    .btn-submit {
        display: block;
        width: 100%;
        padding: 16px;
        background: #000;
        color: #fff;
        font-size: 1.1rem;
        font-weight: 600;
        border: none;
        border-radius: 0;
        cursor: pointer;
        transition: background 0.2s;
        margin-top: 12px;
    }
    .dark .btn-submit { background: #fff; color: #000; }
    .btn-submit:hover { background: #666; }
    .dark .btn-submit:hover { background: #ccc; }
    
    .error-msg {
        color: #dc2626;
        font-size: 0.85rem;
        margin-top: 4px;
    }
    
    .alert-success {
        background: #000;
        color: #fff;
        padding: 16px;
        margin-bottom: 24px;
        font-weight: 500;
        text-align: center;
        border: 1px solid #000;
    }
    .dark .alert-success {
        background: #fff;
        color: #000;
        border-color: #fff;
    }
</style>
@endpush

@section('content')
<section class="contact-section bg-white dark:bg-black text-black dark:text-white min-h-screen">
    <div class="contact-container">
        <div class="contact-grid">
            
            <!-- Left Column: Contact Information -->
            <div class="contact-info">
                <div class="contact-header">
                    <h1>Contact Us</h1>
                    <p>Have a question or need a custom quote? Reach out to us using the details below or fill out the form.</p>
                </div>
                
                <div class="info-block">
                    <div class="icon-wrapper">
                        <svg class="info-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <div class="info-content" style="margin-top: 2px;">
                        <h3>Email</h3>
                        <a href="mailto:info@ModernUPVCwindows.co.uk">info@ModernUPVCwindows.co.uk</a>
                    </div>
                </div>
                
                <div class="info-block">
                    <div class="icon-wrapper">
                        <svg class="info-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    </div>
                    <div class="info-content" style="margin-top: 2px;">
                        <h3>Phone</h3>
                        <a href="tel:01455639739">01455 639 739</a>
                    </div>
                </div>

                <div class="info-block">
                    <div class="icon-wrapper">
                        <svg class="info-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                    </div>
                    <div class="info-content" style="margin-top: 2px;">
                        <h3>WhatsApp</h3>
                        <a href="https://wa.me/447950609631">WhatsApp us<br>07950 609631</a>
                    </div>
                </div>
                
                <div class="info-block">
                    <div class="icon-wrapper">
                        <svg class="info-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <div class="info-content" style="margin-top: 2px;">
                        <h3>Opening Hours</h3>
                        <p>Monday&ndash;Friday 8am&ndash;6pm<br>Saturday 9am&ndash;1pm</p>
                    </div>
                </div>
            </div>
            
            <!-- Right Column: Contact Form -->
            <div>
                @if(session('success'))
                    <div class="alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('contact.submit') }}" method="POST" enctype="multipart/form-data" class="contact-form">
                    @csrf
                    
                    <div class="form-group">
                        <label for="name">Full Name *</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="John Doe" value="{{ old('name') }}" required>
                        @error('name') <span class="error-msg">{{ $message }}</span> @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="john@example.com" value="{{ old('email') }}" required>
                        @error('email') <span class="error-msg">{{ $message }}</span> @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Message *</label>
                        <textarea id="message" name="message" class="form-control" placeholder="How can we help you today?" required>{{ old('message') }}</textarea>
                        @error('message') <span class="error-msg">{{ $message }}</span> @enderror
                    </div>
                    
                    <div class="form-group">
                        <label>Send us a photo or diagram (Optional)</label>
                        <div class="file-upload">
                            <svg class="file-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path></svg>
                            <div style="font-weight: 500; margin-bottom: 4px;">Click to upload a file</div>
                            <div style="font-size: 0.85rem; color: var(--mono-grey);">JPG, PNG, or PDF (Max 5MB)</div>
                            <input type="file" name="attachment" id="attachment" accept=".jpg,.jpeg,.png,.pdf" onchange="updateFileName(this)">
                        </div>
                        <div id="file-name" style="font-size: 0.85rem; margin-top: 8px; font-weight: 500;"></div>
                        @error('attachment') <span class="error-msg">{{ $message }}</span> @enderror
                    </div>
                    
                    <button type="submit" class="btn-submit">Send Message</button>
                </form>
            </div>
            
        </div>
    </div>
</section>

<section class="bg-white dark:bg-black text-black dark:text-white pb-20">
    <div class="contact-container">
        <h2 style="font-size: 2rem; font-weight: 700; margin-bottom: 24px;">Find Us</h2>
        <div style="border: 1px solid #e5e7eb; padding: 4px; background: #fff;" class="dark:border-zinc-800 dark:bg-zinc-900">
            <!-- We apply filter: grayscale(100%) to perfectly match the monochrome aesthetic -->
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d38865.17646698124!2d-1.408792044810757!3d52.54019184511218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487750849204c35b%3A0x6b4ef84c718aef89!2sHinckley!5e0!3m2!1sen!2suk!4v1714152864387!5m2!1sen!2suk" 
                width="100%" 
                height="450" 
                style="border:0; filter: grayscale(100%);" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section>

@push('scripts')
<script>
    function updateFileName(input) {
        const nameDisplay = document.getElementById('file-name');
        if (input.files && input.files.length > 0) {
            nameDisplay.textContent = 'Selected: ' + input.files[0].name;
        } else {
            nameDisplay.textContent = '';
        }
    }
</script>
@endpush
@endsection
