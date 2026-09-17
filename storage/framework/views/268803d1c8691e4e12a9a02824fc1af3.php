<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - <?php echo e(config('app.name', 'Laravel')); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('css/admin.css')); ?>">
</head>
<body>

<div class="admin-wrapper">
    <!-- Sidebar -->
    <aside class="admin-sidebar" id="adminSidebar">
        <div class="sidebar-header">
            <div style="width:36px; height:36px; border-radius:999px; background:rgba(255,255,255,0.1); border:1.5px solid rgba(255,255,255,0.25); display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                <svg style="width:18px;height:18px;" fill="none" stroke="#fff" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 11c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 21v-2a4 4 0 014-4h4a4 4 0 014 4v2"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14l-3 8h6l-3-8z" fill="rgba(255,255,255,0.15)" stroke="#fff"/></svg>
            </div>
            Admin Panel
        </div>
        <nav class="sidebar-nav">
            <a href="<?php echo e(route('admin.dashboard')); ?>" class="nav-item <?php echo e(request()->routeIs('admin.dashboard') ? 'active' : ''); ?>">
                <svg style="width:18px;height:18px;margin-right:10px;flex-shrink:0;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg>
                Dashboard
            </a>

            <div class="nav-section">Sales</div>
            <a href="<?php echo e(route('admin.orders.index')); ?>" class="nav-item <?php echo e(request()->routeIs('admin.orders.*') ? 'active' : ''); ?>">
                <svg style="width:18px;height:18px;margin-right:10px;flex-shrink:0;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/></svg>
                Orders
            </a>

            <div class="nav-section">Catalogue</div>
            <a href="<?php echo e(route('admin.products.index')); ?>" class="nav-item <?php echo e(request()->routeIs('admin.products.*') ? 'active' : ''); ?>">
                <svg style="width:18px;height:18px;margin-right:10px;flex-shrink:0;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                Products
            </a>

            <div class="nav-section">Customers</div>
            <a href="<?php echo e(route('admin.customers.index')); ?>" class="nav-item <?php echo e(request()->routeIs('admin.customers.*') ? 'active' : ''); ?>">
                <svg style="width:18px;height:18px;margin-right:10px;flex-shrink:0;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                Customers
            </a>

            <?php
                $unreadEnquiries = \App\Models\Enquiry::where('read_status', 0)->count();
            ?>

            <div class="nav-section">Content</div>
            <a href="<?php echo e(route('admin.enquiries.index')); ?>" class="nav-item <?php echo e(request()->routeIs('admin.enquiries.*') ? 'active' : ''); ?>">
                <svg style="width:18px;height:18px;margin-right:10px;flex-shrink:0;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                Enquiries
                <?php if($unreadEnquiries > 0): ?>
                    <span style="background:#fff; color:#111; border-radius:999px; padding:2px 8px; font-size:0.6875rem; font-weight:700; margin-left:auto;"><?php echo e($unreadEnquiries); ?></span>
                <?php endif; ?>
            </a>

            <div class="nav-section">Operations</div>
            <a href="<?php echo e(route('admin.delivery.index')); ?>" class="nav-item <?php echo e(request()->routeIs('admin.delivery.*') ? 'active' : ''); ?>">
                <svg style="width:18px;height:18px;margin-right:10px;flex-shrink:0;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"/></svg>
                Delivery
            </a>

            <div class="nav-section">Administration</div>
            <a href="<?php echo e(route('admin.settings.index')); ?>" class="nav-item <?php echo e(request()->routeIs('admin.settings.*') ? 'active' : ''); ?>">
                <svg style="width:18px;height:18px;margin-right:10px;flex-shrink:0;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                Settings
            </a>
        </nav>

        <!-- Sidebar footer / admin info -->
        <a href="<?php echo e(route('admin.settings.index')); ?>" style="display:flex; align-items:center; gap:10px; padding:16px 24px; border-top:1px solid #1E1E1E; flex-shrink:0; text-decoration:none; transition:background 0.15s;" onmouseover="this.style.background='#1a1a1a'" onmouseout="this.style.background='transparent'">
            <div style="width:32px; height:32px; border-radius:999px; background:#333; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                <svg style="width:14px;height:14px;" fill="none" stroke="#999" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
            </div>
            <div style="min-width:0; flex:1;">
                <div style="font-size:0.8125rem; font-weight:600; color:#fff; white-space:nowrap; overflow:hidden; text-overflow:ellipsis;"><?php echo e(Auth::user()->name); ?></div>
                <div style="font-size:0.6875rem; color:#666;"><?php echo e(Auth::user()->role ?? 'Administrator'); ?></div>
            </div>
        </a>
    </aside>

    <!-- Main Content -->
    <main class="admin-main">
        <header class="admin-header">
            <div class="header-left">
                <button class="mobile-menu-btn" id="mobileMenuBtn">
                    <svg style="width:20px;height:20px;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                </button>
                <span style="font-size:0.8125rem; color:#6B6B6B;">Welcome back, <strong style="color:#111;"><?php echo e(Auth::user()->name); ?></strong></span>
            </div>
            <div class="header-right">
                <a href="<?php echo e(route('home')); ?>" target="_blank" class="btn btn-outline" style="min-width:120px; height:40px; justify-content:center;">
                    <svg style="width:14px;height:14px;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                    View Site
                </a>
                <form method="POST" action="<?php echo e(route('admin.logout')); ?>" style="display:inline;" onsubmit="return confirm('Are you sure you want to log out?');">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="btn btn-primary" style="min-width:120px; height:40px; justify-content:center;">Logout</button>
                </form>
            </div>
        </header>
        
        <div class="admin-content">
            <?php if(session('success')): ?>
                <div class="alert-success" style="background-color:#f9fafb; border:1px solid #e5e5e5; padding:14px 18px; margin-bottom:20px; border-radius:6px; font-size:0.8125rem;">
                    <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>
            <?php if(session('error')): ?>
                <div class="alert-error" style="background-color:#111; color:#fff; padding:14px 18px; margin-bottom:20px; border-radius:6px; font-size:0.8125rem;">
                    <?php echo e(session('error')); ?>

                </div>
            <?php endif; ?>

            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </main>
</div>

<script>
    document.getElementById('mobileMenuBtn').addEventListener('click', function() {
        document.getElementById('adminSidebar').classList.toggle('open');
    });
</script>

</body>
</html>
<?php /**PATH D:\internship\windows site\windows-laravel\resources\views/admin/layouts/app.blade.php ENDPATH**/ ?>