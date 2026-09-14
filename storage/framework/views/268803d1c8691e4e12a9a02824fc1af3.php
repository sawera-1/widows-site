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
            Admin Panel
        </div>
        <nav class="sidebar-nav">
            <a href="<?php echo e(route('admin.dashboard')); ?>" class="nav-item <?php echo e(request()->routeIs('admin.dashboard') ? 'active' : ''); ?>">Dashboard</a>

            <div class="nav-section">Sales</div>
            <a href="<?php echo e(route('admin.orders.index')); ?>" class="nav-item <?php echo e(request()->routeIs('admin.orders.*') ? 'active' : ''); ?>">Orders</a>

            <div class="nav-section">Catalogue</div>
            <a href="<?php echo e(route('admin.products.index')); ?>" class="nav-item <?php echo e(request()->routeIs('admin.products.*') ? 'active' : ''); ?>">Products</a>

            <div class="nav-section">Customers</div>
            <a href="<?php echo e(route('admin.customers.index')); ?>" class="nav-item <?php echo e(request()->routeIs('admin.customers.*') ? 'active' : ''); ?>">Customers</a>

            <?php
                $unreadEnquiries = \App\Models\Enquiry::where('read_status', 0)->count();
            ?>

            <div class="nav-section">Content</div>
            <a href="<?php echo e(route('admin.enquiries.index')); ?>" class="nav-item <?php echo e(request()->routeIs('admin.enquiries.*') ? 'active' : ''); ?>">
                Enquiries
                <?php if($unreadEnquiries > 0): ?>
                    <span style="background:#111; color:#fff; border-radius:12px; padding:2px 8px; font-size:0.75rem; float:right;"><?php echo e($unreadEnquiries); ?></span>
                <?php endif; ?>
            </a>

            <div class="nav-section">Operations</div>
            <a href="<?php echo e(route('admin.delivery.index')); ?>" class="nav-item <?php echo e(request()->routeIs('admin.delivery.*') ? 'active' : ''); ?>">Delivery</a>

            <div class="nav-section">Administration</div>
            <a href="<?php echo e(route('admin.settings.index')); ?>" class="nav-item <?php echo e(request()->routeIs('admin.settings.*') ? 'active' : ''); ?>">Settings</a>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="admin-main">
        <header class="admin-header">
            <div class="header-left">
                <button class="mobile-menu-btn" id="mobileMenuBtn">☰</button>
                <span><?php echo e(Auth::user()->name); ?></span>
            </div>
            <div class="header-right">
                <a href="<?php echo e(route('home')); ?>" target="_blank" class="btn btn-outline">View Site</a>
                <form method="POST" action="<?php echo e(route('admin.logout')); ?>" style="display:inline;">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="btn btn-primary">Logout</button>
                </form>
            </div>
        </header>
        
        <div class="admin-content">
            <?php if(session('success')): ?>
                <div style="background-color:#f9fafb; border:1px solid #e5e7eb; padding:15px; margin-bottom:20px; border-radius:4px;">
                    <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>
            <?php if(session('error')): ?>
                <div style="background-color:#1f2937; color:#fff; padding:15px; margin-bottom:20px; border-radius:4px;">
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