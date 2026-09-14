<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - {{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>

<div class="auth-wrapper">
    <div class="auth-card">
        <div class="auth-title">Admin Login</div>
        
        @if(session('error'))
            <div style="color: #6b7280; margin-bottom: 15px; font-size:0.875rem; text-align:center;">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="{{ route('admin.login.submit') }}">
            @csrf
            
            <div class="form-group">
                <label for="email" class="form-label">Email Address</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                @error('email')
                    <span style="color: #6b7280; font-size:0.75rem;">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <input id="password" type="password" class="form-control" name="password" required>
            </div>

            <div class="form-group" style="display:flex; align-items:center; gap:10px;">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember" style="font-size:0.875rem;">
                    Remember Me
                </label>
            </div>

            <div class="form-group" style="margin-top: 20px;">
                <button type="submit" class="btn btn-primary" style="width:100%;">
                    Login
                </button>
            </div>
        </form>
    </div>
</div>

</body>
</html>
