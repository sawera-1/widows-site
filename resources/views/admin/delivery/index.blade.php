@extends('admin.layouts.app')

@section('content')

<div style="margin-bottom:28px;">
    <h1 class="page-title">Delivery Settings</h1>
    <p class="page-subtitle" style="margin-bottom:0;">Configure delivery methods, areas, matrices, and lead times.</p>
</div>

<!-- ─── STAT CARDS ─── -->
<div class="grid-cards" style="grid-template-columns: repeat(3, 1fr); margin-bottom: 24px;">
    <div class="stat-card">
        <div class="stat-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"/></svg>
        </div>
        <div class="stat-card-title">Active Methods</div>
        <div class="stat-card-value">{{ collect($methods)->where('is_active', 1)->count() }}</div>
    </div>
    <div class="stat-card">
        <div class="stat-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
        </div>
        <div class="stat-card-title">Delivery Areas</div>
        <div class="stat-card-value">{{ collect($areas)->where('is_active', 1)->count() }}</div>
    </div>
    <div class="stat-card">
        <div class="stat-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
        </div>
        <div class="stat-card-title">Charge Rules</div>
        <div class="stat-card-value">{{ collect($charges)->where('is_active', 1)->count() }}</div>
    </div>
</div>

@if(session('success'))
    <div class="alert alert-success mb-4" style="background:#e6f4ea; color:#1e4620; padding:15px; border-radius:0;">{{ session('success') }}</div>
@endif
@if($errors->any())
    <div class="alert alert-danger mb-4" style="background:#fce8e6; color:#a50e0e; padding:15px; border-radius:0;">
        <ul class="mb-0">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

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
        <form action="{{ route('admin.delivery.content.store') }}" method="POST">
            @csrf
            
            <div class="mb-4">
                <h4>Intro Text</h4>
                <div class="form-group mb-2">
                    <label class="form-label">Title</label>
                    <input type="text" name="contents[intro][title]" class="form-control" value="{{ $contents['intro']->title ?? 'Bespoke Delivery Designed for You' }}">
                </div>
                <div class="form-group">
                    <label class="form-label">Content (HTML allowed)</label>
                    <textarea name="contents[intro][content]" class="form-control" rows="4">{{ $contents['intro']->content ?? '' }}</textarea>
                </div>
            </div>

            <div class="mb-4">
                <h4>Fleet/Vehicles Description</h4>
                <div class="form-group mb-2">
                    <label class="form-label">Title</label>
                    <input type="text" name="contents[fleet][title]" class="form-control" value="{{ $contents['fleet']->title ?? 'Our Custom Delivery Fleet' }}">
                </div>
                <div class="form-group">
                    <label class="form-label">Content</label>
                    <textarea name="contents[fleet][content]" class="form-control" rows="4">{{ $contents['fleet']->content ?? '' }}</textarea>
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
        
        <table class="admin-table">
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
                @foreach($methods as $method)
                <tr>
                    <form action="{{ route('admin.delivery.method.update', $method->id) }}" method="POST">
                        @csrf
                        <td><input type="number" name="sort_order" class="form-control form-control-sm" style="width:70px" value="{{ $method->sort_order }}"></td>
                        <td><input type="text" name="name" class="form-control form-control-sm" value="{{ $method->name }}" required></td>
                        <td><input type="number" step="0.01" name="base_price" class="form-control form-control-sm" value="{{ $method->base_price }}"></td>
                        <td><input type="text" name="estimated_lead_time" class="form-control form-control-sm" value="{{ $method->estimated_lead_time }}"></td>
                        <td><input type="checkbox" name="is_active" value="1" {{ $method->is_active ? 'checked' : '' }}></td>
                        <td><button type="submit" class="btn btn-sm btn-primary">Save</button></td>
                    </form>
                </tr>
                @endforeach
                <!-- Add New -->
                <tr style="background:#f9f9f9">
                    <form action="{{ route('admin.delivery.method.store') }}" method="POST">
                        @csrf
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
        
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Postcode Rules</th>
                    <th>Active</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($areas as $area)
                <tr>
                    <form action="{{ route('admin.delivery.area.update', $area->id) }}" method="POST">
                        @csrf
                        <td><input type="text" name="name" class="form-control form-control-sm" value="{{ $area->name }}" required></td>
                        <td><input type="text" name="postcode_rule" class="form-control form-control-sm" value="{{ $area->postcode_rule }}" placeholder="Regex or comma separated"></td>
                        <td><input type="checkbox" name="is_active" value="1" {{ $area->is_active ? 'checked' : '' }}></td>
                        <td><button type="submit" class="btn btn-sm btn-primary">Save</button></td>
                    </form>
                </tr>
                @endforeach
                <!-- Add New -->
                <tr style="background:#f9f9f9">
                    <form action="{{ route('admin.delivery.area.store') }}" method="POST">
                        @csrf
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
        
        <table class="admin-table">
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
                @foreach($charges as $charge)
                <tr>
                    <form action="{{ route('admin.delivery.charge.update', $charge->id) }}" method="POST">
                        @csrf
                        <td>{{ $charge->method->name ?? 'Deleted Method' }}</td>
                        <td>{{ $charge->area->name ?? 'Deleted Area' }}</td>
                        <td><input type="number" step="0.01" name="charge" class="form-control form-control-sm" value="{{ $charge->charge }}" required></td>
                        <td><input type="checkbox" name="is_active" value="1" {{ $charge->is_active ? 'checked' : '' }}></td>
                        <td><button type="submit" class="btn btn-sm btn-primary">Save</button></td>
                    </form>
                </tr>
                @endforeach
                <!-- Add New -->
                <tr style="background:#f9f9f9">
                    <form action="{{ route('admin.delivery.charge.store') }}" method="POST">
                        @csrf
                        <td>
                            <select name="delivery_method_id" class="form-control form-control-sm" required>
                                <option value="">Select Method</option>
                                @foreach($methods as $m) <option value="{{ $m->id }}">{{ $m->name }}</option> @endforeach
                            </select>
                        </td>
                        <td>
                            <select name="delivery_area_id" class="form-control form-control-sm" required>
                                <option value="">Select Area</option>
                                @foreach($areas as $a) <option value="{{ $a->id }}">{{ $a->name }}</option> @endforeach
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
        
        <table class="admin-table">
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
                @foreach($leadTimes as $lt)
                <tr>
                    <form action="{{ route('admin.delivery.leadtime.update', $lt->id) }}" method="POST">
                        @csrf
                        <td><input type="number" name="sort_order" class="form-control form-control-sm" style="width:70px" value="{{ $lt->sort_order }}"></td>
                        <td><input type="text" name="product_type" class="form-control form-control-sm" value="{{ $lt->product_type }}" required></td>
                        <td><input type="text" name="delivery_time" class="form-control form-control-sm" value="{{ $lt->delivery_time }}"></td>
                        <td><input type="text" name="collection_time" class="form-control form-control-sm" value="{{ $lt->collection_time }}"></td>
                        <td><input type="checkbox" name="is_active" value="1" {{ $lt->is_active ? 'checked' : '' }}></td>
                        <td><button type="submit" class="btn btn-sm btn-primary">Save</button></td>
                    </form>
                </tr>
                @endforeach
                <!-- Add New -->
                <tr style="background:#f9f9f9">
                    <form action="{{ route('admin.delivery.leadtime.store') }}" method="POST">
                        @csrf
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

@endsection
