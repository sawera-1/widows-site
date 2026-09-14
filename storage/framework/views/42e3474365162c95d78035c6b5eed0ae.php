<?php $__env->startSection('content'); ?>

<h1 class="page-title mb-4">Delivery CMS</h1>

<?php if(session('success')): ?>
    <div class="alert alert-success mb-4" style="background:#e6f4ea; color:#1e4620; padding:15px; border-radius:4px;"><?php echo e(session('success')); ?></div>
<?php endif; ?>
<?php if($errors->any()): ?>
    <div class="alert alert-danger mb-4" style="background:#fce8e6; color:#a50e0e; padding:15px; border-radius:4px;">
        <ul class="mb-0">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<div class="card p-0 mb-4">
    <!-- Tabs -->
    <div class="tabs" style="display:flex; border-bottom:1px solid #ddd; background:#f9f9f9; padding:0 20px;">
        <button class="tab-btn active" onclick="openTab(event, 'Content')">Page Content</button>
        <button class="tab-btn" onclick="openTab(event, 'Methods')">Delivery Methods</button>
        <button class="tab-btn" onclick="openTab(event, 'Areas')">Delivery Areas</button>
        <button class="tab-btn" onclick="openTab(event, 'Charges')">Charges (Matrix)</button>
        <button class="tab-btn" onclick="openTab(event, 'LeadTimes')">Lead Times</button>
    </div>

    <!-- 1. Content Tab -->
    <div id="Content" class="tab-content" style="display:block; padding:20px;">
        <h3>Page Text & Content</h3>
        <hr>
        <form action="<?php echo e(route('admin.delivery.content.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            
            <div class="mb-4">
                <h4>Intro Text</h4>
                <div class="form-group mb-2">
                    <label class="form-label">Title</label>
                    <input type="text" name="contents[intro][title]" class="form-control" value="<?php echo e($contents['intro']->title ?? 'Bespoke Delivery Designed for You'); ?>">
                </div>
                <div class="form-group">
                    <label class="form-label">Content (HTML allowed)</label>
                    <textarea name="contents[intro][content]" class="form-control" rows="4"><?php echo e($contents['intro']->content ?? ''); ?></textarea>
                </div>
            </div>

            <div class="mb-4">
                <h4>Fleet/Vehicles Description</h4>
                <div class="form-group mb-2">
                    <label class="form-label">Title</label>
                    <input type="text" name="contents[fleet][title]" class="form-control" value="<?php echo e($contents['fleet']->title ?? 'Our Custom Delivery Fleet'); ?>">
                </div>
                <div class="form-group">
                    <label class="form-label">Content</label>
                    <textarea name="contents[fleet][content]" class="form-control" rows="4"><?php echo e($contents['fleet']->content ?? ''); ?></textarea>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Save Content</button>
        </form>
    </div>

    <!-- 2. Methods Tab -->
    <div id="Methods" class="tab-content" style="display:none; padding:20px;">
        <h3>Delivery Methods</h3>
        <p class="text-muted">E.g., Standard Delivery, Express, Supply Only, Local Collection.</p>
        <hr>
        
        <table class="table mb-4">
            <thead>
                <tr>
                    <th>Sort</th>
                    <th>Name</th>
                    <th>Base Price</th>
                    <th>Lead Time</th>
                    <th>Active</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $methods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $method): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <form action="<?php echo e(route('admin.delivery.method.update', $method->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <td><input type="number" name="sort_order" class="form-control form-control-sm" style="width:70px" value="<?php echo e($method->sort_order); ?>"></td>
                        <td><input type="text" name="name" class="form-control form-control-sm" value="<?php echo e($method->name); ?>" required></td>
                        <td><input type="number" step="0.01" name="base_price" class="form-control form-control-sm" value="<?php echo e($method->base_price); ?>"></td>
                        <td><input type="text" name="estimated_lead_time" class="form-control form-control-sm" value="<?php echo e($method->estimated_lead_time); ?>"></td>
                        <td><input type="checkbox" name="is_active" value="1" <?php echo e($method->is_active ? 'checked' : ''); ?>></td>
                        <td><button type="submit" class="btn btn-sm btn-secondary">Save</button></td>
                    </form>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <!-- Add New -->
                <tr style="background:#f9f9f9">
                    <form action="<?php echo e(route('admin.delivery.method.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <td><input type="number" name="sort_order" class="form-control form-control-sm" style="width:70px" value="0"></td>
                        <td><input type="text" name="name" class="form-control form-control-sm" placeholder="New Method" required></td>
                        <td><input type="number" step="0.01" name="base_price" class="form-control form-control-sm" placeholder="0.00"></td>
                        <td><input type="text" name="estimated_lead_time" class="form-control form-control-sm" placeholder="e.g. 5 days"></td>
                        <td><input type="checkbox" name="is_active" value="1" checked></td>
                        <td><button type="submit" class="btn btn-sm btn-primary">Add</button></td>
                    </form>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- 3. Areas Tab -->
    <div id="Areas" class="tab-content" style="display:none; padding:20px;">
        <h3>Delivery Areas (Zones)</h3>
        <p class="text-muted">E.g., Local (Within 20 miles), National (Mainland UK), Highlands.</p>
        <hr>
        
        <table class="table mb-4">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Postcode Rules</th>
                    <th>Active</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $areas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <form action="<?php echo e(route('admin.delivery.area.update', $area->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <td><input type="text" name="name" class="form-control form-control-sm" value="<?php echo e($area->name); ?>" required></td>
                        <td><input type="text" name="postcode_rule" class="form-control form-control-sm" value="<?php echo e($area->postcode_rule); ?>" placeholder="Regex or comma separated"></td>
                        <td><input type="checkbox" name="is_active" value="1" <?php echo e($area->is_active ? 'checked' : ''); ?>></td>
                        <td><button type="submit" class="btn btn-sm btn-secondary">Save</button></td>
                    </form>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <!-- Add New -->
                <tr style="background:#f9f9f9">
                    <form action="<?php echo e(route('admin.delivery.area.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <td><input type="text" name="name" class="form-control form-control-sm" placeholder="New Area" required></td>
                        <td><input type="text" name="postcode_rule" class="form-control form-control-sm" placeholder="e.g. AL,B,BA"></td>
                        <td><input type="checkbox" name="is_active" value="1" checked></td>
                        <td><button type="submit" class="btn btn-sm btn-primary">Add</button></td>
                    </form>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- 4. Charges Tab -->
    <div id="Charges" class="tab-content" style="display:none; padding:20px;">
        <h3>Charge Rules</h3>
        <p class="text-muted">Map a Delivery Method + Area to a final Price. (Overrides base price).</p>
        <hr>
        
        <table class="table mb-4">
            <thead>
                <tr>
                    <th>Method</th>
                    <th>Area</th>
                    <th>Charge (£)</th>
                    <th>Active</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $charges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $charge): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <form action="<?php echo e(route('admin.delivery.charge.update', $charge->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <td><?php echo e($charge->method->name ?? 'Deleted Method'); ?></td>
                        <td><?php echo e($charge->area->name ?? 'Deleted Area'); ?></td>
                        <td><input type="number" step="0.01" name="charge" class="form-control form-control-sm" value="<?php echo e($charge->charge); ?>" required></td>
                        <td><input type="checkbox" name="is_active" value="1" <?php echo e($charge->is_active ? 'checked' : ''); ?>></td>
                        <td><button type="submit" class="btn btn-sm btn-secondary">Save</button></td>
                    </form>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <!-- Add New -->
                <tr style="background:#f9f9f9">
                    <form action="<?php echo e(route('admin.delivery.charge.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <td>
                            <select name="delivery_method_id" class="form-control form-control-sm" required>
                                <option value="">Select Method</option>
                                <?php $__currentLoopData = $methods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <option value="<?php echo e($m->id); ?>"><?php echo e($m->name); ?></option> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </td>
                        <td>
                            <select name="delivery_area_id" class="form-control form-control-sm" required>
                                <option value="">Select Area</option>
                                <?php $__currentLoopData = $areas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <option value="<?php echo e($a->id); ?>"><?php echo e($a->name); ?></option> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </td>
                        <td><input type="number" step="0.01" name="charge" class="form-control form-control-sm" placeholder="0.00" required></td>
                        <td><input type="checkbox" name="is_active" value="1" checked></td>
                        <td><button type="submit" class="btn btn-sm btn-primary">Add</button></td>
                    </form>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- 5. Lead Times Tab -->
    <div id="LeadTimes" class="tab-content" style="display:none; padding:20px;">
        <h3>Lead Times Matrix</h3>
        <p class="text-muted">Display expected times for Delivery vs Collection per product type.</p>
        <hr>
        
        <table class="table mb-4">
            <thead>
                <tr>
                    <th>Sort</th>
                    <th>Product Type</th>
                    <th>Delivery Time</th>
                    <th>Collection Time</th>
                    <th>Active</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $leadTimes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <form action="<?php echo e(route('admin.delivery.leadtime.update', $lt->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <td><input type="number" name="sort_order" class="form-control form-control-sm" style="width:70px" value="<?php echo e($lt->sort_order); ?>"></td>
                        <td><input type="text" name="product_type" class="form-control form-control-sm" value="<?php echo e($lt->product_type); ?>" required></td>
                        <td><input type="text" name="delivery_time" class="form-control form-control-sm" value="<?php echo e($lt->delivery_time); ?>"></td>
                        <td><input type="text" name="collection_time" class="form-control form-control-sm" value="<?php echo e($lt->collection_time); ?>"></td>
                        <td><input type="checkbox" name="is_active" value="1" <?php echo e($lt->is_active ? 'checked' : ''); ?>></td>
                        <td><button type="submit" class="btn btn-sm btn-secondary">Save</button></td>
                    </form>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <!-- Add New -->
                <tr style="background:#f9f9f9">
                    <form action="<?php echo e(route('admin.delivery.leadtime.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <td><input type="number" name="sort_order" class="form-control form-control-sm" style="width:70px" value="0"></td>
                        <td><input type="text" name="product_type" class="form-control form-control-sm" placeholder="e.g. uPVC Casement" required></td>
                        <td><input type="text" name="delivery_time" class="form-control form-control-sm" placeholder="e.g. 5-7 Working Days"></td>
                        <td><input type="text" name="collection_time" class="form-control form-control-sm" placeholder="e.g. 4-5 Working Days"></td>
                        <td><input type="checkbox" name="is_active" value="1" checked></td>
                        <td><button type="submit" class="btn btn-sm btn-primary">Add</button></td>
                    </form>
                </tr>
            </tbody>
        </table>
    </div>

</div>

<style>
    .tab-btn {
        padding: 15px 20px;
        background: none;
        border: none;
        border-bottom: 2px solid transparent;
        cursor: pointer;
        font-weight: 500;
        outline: none;
    }
    .tab-btn:hover {
        background: #eee;
    }
    .tab-btn.active {
        border-bottom: 2px solid #000;
        color: #000;
    }
</style>

<script>
    function openTab(evt, tabName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tab-content");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tab-btn");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\internship\windows site\windows-laravel\resources\views/admin/delivery/index.blade.php ENDPATH**/ ?>