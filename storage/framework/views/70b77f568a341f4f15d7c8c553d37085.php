<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - <?php echo e(config('app.name')); ?></title>
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');
        
        * { box-sizing: border-box; margin: 0; padding: 0; }
        
        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            background-color: #0A0A0A;
            min-height: 100vh;
            display: flex;
        }

        .page-wrapper {
            display: flex;
            width: 100vw;
            min-height: 100vh;
        }

        /* ─── LEFT SIDE VISUAL (WINDOW & DOOR) ─── */
        .split-left {
            flex: 1;
            background-color: #0A0A0A;
            display: flex;
            align-items: flex-end;
            justify-content: center;
            position: relative;
            overflow: hidden;
            padding-bottom: 15vh; /* space above the floor */
        }
        
        .admin-logo {
            position: absolute;
            top: 22vh;
            left: 0;
            width: 100%;
            display: flex;
            justify-content: center;
            z-index: 10;
        }

        .admin-logo-box {
            display: flex;
            flex-direction: column;
            text-align: center;
            border: 2px solid rgba(255,255,255,0.7);
            padding: 1.5rem 2rem;
            border-radius: 0;
            background: rgba(0,0,0,0.2);
        }
        
        .admin-logo-primary {
            font-size: 32px;
            font-weight: 800;
            color: #FFFFFF;
            text-transform: uppercase;
            letter-spacing: -0.02em;
            line-height: 1;
        }
        
        .admin-logo-secondary {
            font-size: 13px;
            font-weight: 500;
            color: #888888;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            margin-top: 6px;
        }
        
        /* The Floor Reflection Gradient */
        .split-left::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 25vh; /* the floor area */
            background: linear-gradient(to bottom, rgba(255,255,255,0.03) 0%, rgba(10,10,10,1) 100%);
            z-index: 1;
        }

        .anim-composite {
            display: flex;
            gap: 5rem;
            align-items: flex-end;
            justify-content: center;
            z-index: 2;
            transform: scale(1.35);
            /* Reflection using webkit-box-reflect for a clean mirror effect under the window/door */
            -webkit-box-reflect: below 2px linear-gradient(transparent 60%, rgba(255,255,255,0.2));
        }

        .anim-window {
            position: relative;
            width: 140px;
            height: 200px;
            perspective: 1200px;
            transform-style: preserve-3d;
        }

        .anim-door {
            position: relative;
            width: 140px;
            height: 320px;
            perspective: 1200px;
            transform-style: preserve-3d;
        }

        .anim-frame {
            position: absolute;
            inset: 0;
            border: 4px solid rgba(255,255,255,0.65);
            border-radius: 6px;
            background: linear-gradient(135deg, rgba(20,20,20,0.6) 0%, rgba(40,40,40,0.2) 100%);
            box-shadow: inset 0 5px 15px rgba(0,0,0,0.8), 0 10px 30px rgba(0,0,0,0.5);
        }

        .anim-mullion-h {
            position: absolute;
            left: 0; right: 0; top: 40%;
            height: 6px;
            background: rgba(255,255,255,0.65);
            transform: translateY(-50%);
            z-index: 2;
            box-shadow: 0 4px 10px rgba(0,0,0,0.5);
        }

        .anim-top-glass {
            position: absolute;
            top: 6px; left: 6px; right: 6px; bottom: 60%;
            background: linear-gradient(135deg, rgba(255,255,255,0.15) 0%, rgba(255,255,255,0.02) 100%);
            border: 1px solid rgba(255,255,255,0.2);
            border-radius: 2px;
            overflow: hidden;
        }

        .anim-sash {
            position: absolute;
            top: 40%; bottom: 6px;
            width: calc(50% - 6px);
            border: 3px solid rgba(255,255,255,0.65);
            background: linear-gradient(135deg, rgba(255,255,255,0.12) 0%, rgba(255,255,255,0.01) 100%);
            overflow: hidden;
            z-index: 1;
            border-radius: 2px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.4);
        }

        .anim-door .anim-sash {
            top: 6px; bottom: 6px;
            width: calc(100% - 12px);
            left: 6px;
            transform-origin: left;
            animation: openLeft 6s infinite alternate cubic-bezier(0.5, 0, 0.2, 1);
            animation-delay: 2s;
        }

        .door-handle {
            position: absolute;
            right: 12px;
            top: 50%;
            width: 6px;
            height: 48px;
            background: linear-gradient(to bottom, #999, #fff, #999);
            border-radius: 3px;
            transform: translateY(-50%);
            box-shadow: 2px 2px 5px rgba(0,0,0,0.5);
        }

        .door-mail-slot {
            position: absolute;
            left: 50%;
            bottom: 50px;
            width: 50px;
            height: 8px;
            background: rgba(255,255,255,0.7);
            border-radius: 4px;
            transform: translateX(-50%);
            box-shadow: inset 0 2px 4px rgba(0,0,0,0.8);
        }

        .anim-sash-left {
            left: 6px;
            transform-origin: left;
            animation: openLeft 6s infinite alternate cubic-bezier(0.5, 0, 0.2, 1);
        }

        .anim-sash-right {
            right: 6px;
            transform-origin: right;
            animation: openRight 6s infinite alternate cubic-bezier(0.5, 0, 0.2, 1);
            animation-delay: 0.5s;
        }

        @keyframes openLeft {
            0%, 20% { transform: rotateY(0deg); }
            80%, 100% { transform: rotateY(-35deg); }
        }

        @keyframes openRight {
            0%, 20% { transform: rotateY(0deg); }
            80%, 100% { transform: rotateY(35deg); }
        }

        /* Glass reflection */
        .glass-reflection {
            position: absolute;
            top: -100%; left: -100%;
            width: 300%; height: 300%;
            background: linear-gradient(135deg, rgba(255,255,255,0) 0%, rgba(255,255,255,0) 35%, rgba(255,255,255,0.2) 45%, rgba(255,255,255,0.4) 50%, rgba(255,255,255,0.1) 55%, rgba(255,255,255,0) 65%, rgba(255,255,255,0) 100%);
            animation: shine 4s infinite linear;
        }

        .anim-top-glass .glass-reflection {
            animation-delay: 2s;
        }

        @keyframes shine {
            0% { transform: translateY(-50%); }
            100% { transform: translateY(100%); }
        }

        /* ─── RIGHT SIDE LOGIN (WHITE AREA) ─── */
        .split-right {
            flex: 1;
            background-color: #FFFFFF;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .login-form-wrapper {
            width: 100%;
            max-width: 600px;
            width: 78%; /* ~75-80% of right half as requested */
        }

        .login-form-wrapper h2 {
            font-size: 38px;
            font-weight: 700;
            margin-bottom: 2.5rem;
            color: #000000;
            letter-spacing: -0.01em;
            text-transform: uppercase;
            text-align: left;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            font-size: 15px;
            font-weight: 600;
            margin-bottom: 0.6rem;
            color: #111111;
            text-transform: uppercase;
        }

        .form-control {
            width: 100%;
            height: 60px;
            padding: 0 1.25rem;
            border: 1px solid #333333;
            border-radius: 2px;
            font-size: 16px;
            color: #000000;
            background: #FFFFFF;
            font-family: inherit;
            transition: border-color 0.2s;
        }

        .form-control::placeholder {
            color: #888888;
        }

        .form-control:focus {
            outline: none;
            border-color: #000000;
            background: #FFFFFF;
        }

        .email-wrapper, .password-wrapper {
            position: relative;
        }
        
        .email-wrapper input, .password-wrapper input {
            padding-left: 3.5rem;
        }
        
        .password-wrapper input {
            padding-right: 4rem;
        }

        .input-icon {
            position: absolute;
            left: 1.25rem;
            top: 50%;
            transform: translateY(-50%);
            color: #555555;
            display: flex;
            align-items: center;
            justify-content: center;
            pointer-events: none;
        }

        .eye-icon {
            position: absolute;
            right: 1.25rem;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #000000;
            cursor: pointer;
            padding: 0.25rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .checkbox-group {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin-top: 1rem;
            margin-bottom: 3rem;
        }

        .checkbox-group input {
            appearance: none;
            -webkit-appearance: none;
            width: 22px;
            height: 22px;
            border: 1px solid #222222;
            background: #FFFFFF;
            cursor: pointer;
            position: relative;
            border-radius: 0;
        }
        
        .checkbox-group input:checked::after {
            content: '';
            position: absolute;
            left: 6px;
            top: 2px;
            width: 6px;
            height: 12px;
            border: solid #000000;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
        }

        .checkbox-group label {
            font-size: 16px;
            color: #333333;
            cursor: pointer;
            user-select: none;
            font-weight: 500;
        }

        .btn-primary {
            background: #0A0A0A;
            color: #FFFFFF;
            border: none;
            height: 60px;
            width: 100%;
            border-radius: 2px;
            font-size: 18px;
            font-weight: 600;
            text-transform: uppercase;
            cursor: pointer;
            transition: background 0.2s ease, transform 0.1s;
            font-family: inherit;
        }

        .btn-primary:hover {
            background: #444444; /* Grey hover effect */
        }
        
        .btn-primary:active {
            transform: scale(0.98);
        }

        .error-msg {
            color: #dc2626;
            font-size: 0.9rem;
            margin-top: 0.5rem;
            display: block;
            font-weight: 500;
        }

        .global-error {
            background: #fee2e2;
            color: #b91c1c;
            padding: 1.25rem;
            border-radius: 0;
            margin-bottom: 2rem;
            font-size: 1rem;
            font-weight: 500;
            border: 1px solid #f87171;
        }
        
        @media (max-width: 900px) {
            .page-wrapper { flex-direction: column; }
            .split-left { min-height: 40vh; padding-bottom: 5vh; padding-top: 5vh; }
            .split-right { padding: 3rem 1.5rem; }
            .login-form-wrapper { width: 100%; max-width: 100%; }
            .login-form-wrapper h2 { font-size: 40px; margin-bottom: 2rem; }
            .anim-composite { transform: scale(0.9); }
        }
    </style>
</head>
<body>

<div class="page-wrapper">
    
    <!-- LEFT SIDE: Architectural Visual -->
    <div class="split-left">
        
        <!-- Logo -->
        <div class="admin-logo">
            <div class="admin-logo-box">
                <span class="admin-logo-primary">Burbage Custom</span>
                <span class="admin-logo-secondary">Windows Ltd</span>
            </div>
        </div>

        <div class="anim-composite">
            <!-- Window -->
            <div class="anim-window">
                <div class="anim-frame"></div>
                <div class="anim-mullion-h"></div>
                <div class="anim-top-glass">
                    <div class="glass-reflection"></div>
                </div>
                <div class="anim-sash anim-sash-left">
                    <div class="glass-reflection"></div>
                </div>
                <div class="anim-sash anim-sash-right">
                    <div class="glass-reflection"></div>
                </div>
            </div>
            
            <!-- Door -->
            <div class="anim-door">
                <div class="anim-frame"></div>
                <div class="anim-sash">
                    <div class="door-handle"></div>
                    <div class="door-mail-slot"></div>
                    <div class="glass-reflection"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- RIGHT SIDE: Login Area -->
    <div class="split-right">
        <div class="login-form-wrapper">
            <h2>ADMIN LOGIN</h2>
            
            <?php if(session('error')): ?>
                <div class="global-error">
                    <?php echo e(session('error')); ?>

                </div>
            <?php endif; ?>

            <form method="POST" action="<?php echo e(route('admin.login.submit')); ?>">
                <?php echo csrf_field(); ?>
                
                <div class="form-group">
                    <label for="email" class="form-label">EMAIL ADDRESS</label>
                    <div class="email-wrapper">
                        <span class="input-icon">
                            <!-- Mail Icon -->
                            <svg style="width:24px;height:24px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </span>
                        <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" placeholder="admin@example.com" required autofocus>
                    </div>
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="error-msg"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">PASSWORD</label>
                    <div class="password-wrapper">
                        <span class="input-icon">
                            <!-- Lock Icon -->
                            <svg style="width:24px;height:24px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                            </svg>
                        </span>
                        <input id="password" type="password" class="form-control" name="password" placeholder="••••••••" required>
                        <button type="button" class="eye-icon" id="togglePassword" aria-label="Toggle password visibility">
                            <svg id="eyeShow" style="width:24px;height:24px;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                            <svg id="eyeHide" style="width:24px;height:24px;display:none;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path></svg>
                        </button>
                    </div>
                </div>

                <div class="form-group checkbox-group">
                    <input type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                    <label for="remember">
                        Remember Me
                    </label>
                </div>

                <button type="submit" class="btn-primary">
                    LOGIN
                </button>
            </form>
        </div>
    </div>

</div>

<script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');
    const eyeShow = document.querySelector('#eyeShow');
    const eyeHide = document.querySelector('#eyeHide');

    togglePassword.addEventListener('click', function (e) {
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        
        if (type === 'text') {
            eyeShow.style.display = 'none';
            eyeHide.style.display = 'block';
        } else {
            eyeShow.style.display = 'block';
            eyeHide.style.display = 'none';
        }
    });
</script>

</body>
</html>
<?php /**PATH D:\internship\windows site\windows-laravel\resources\views/admin/auth/login.blade.php ENDPATH**/ ?>