<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DeliveryMethod;
use App\Models\DeliveryArea;
use App\Models\DeliveryCharge;
use App\Models\DeliveryLeadTime;
use App\Models\DeliveryContent;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    public function index()
    {
        $methods = DeliveryMethod::orderBy('sort_order')->get();
        $areas = DeliveryArea::all();
        $charges = DeliveryCharge::with(['method', 'area'])->get();
        $leadTimes = DeliveryLeadTime::orderBy('sort_order')->get();
        
        // We'll organize content by section_key for easy form binding
        $contents = DeliveryContent::all()->keyBy('section_key');

        return view('admin.delivery.index', compact('methods', 'areas', 'charges', 'leadTimes', 'contents'));
    }

    // Methods
    public function storeMethod(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'base_price' => 'nullable|numeric|min:0',
            'estimated_lead_time' => 'nullable|string|max:255',
            'is_active' => 'boolean',
            'sort_order' => 'integer'
        ]);

        $validated['is_active'] = $request->has('is_active');
        $validated['base_price'] = $validated['base_price'] ?? 0;
        
        DeliveryMethod::create($validated);
        return back()->with('success', 'Delivery Method added.');
    }

    public function updateMethod(Request $request, $id)
    {
        $method = DeliveryMethod::findOrFail($id);
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'base_price' => 'nullable|numeric|min:0',
            'estimated_lead_time' => 'nullable|string|max:255',
            'is_active' => 'boolean',
            'sort_order' => 'integer'
        ]);

        $validated['is_active'] = $request->has('is_active');
        $validated['base_price'] = $validated['base_price'] ?? 0;

        $method->update($validated);
        return back()->with('success', 'Delivery Method updated.');
    }

    // Areas
    public function storeArea(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'postcode_rule' => 'nullable|string|max:255',
            'is_active' => 'boolean',
        ]);
        
        $validated['is_active'] = $request->has('is_active');
        DeliveryArea::create($validated);
        return back()->with('success', 'Delivery Area added.');
    }

    public function updateArea(Request $request, $id)
    {
        $area = DeliveryArea::findOrFail($id);
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'postcode_rule' => 'nullable|string|max:255',
            'is_active' => 'boolean',
        ]);
        
        $validated['is_active'] = $request->has('is_active');
        $area->update($validated);
        return back()->with('success', 'Delivery Area updated.');
    }

    // Charges
    public function storeCharge(Request $request)
    {
        $validated = $request->validate([
            'delivery_method_id' => 'required|exists:delivery_methods,id',
            'delivery_area_id' => 'required|exists:delivery_areas,id',
            'charge' => 'required|numeric|min:0',
            'is_active' => 'boolean',
        ]);
        
        $validated['is_active'] = $request->has('is_active');
        DeliveryCharge::create($validated);
        return back()->with('success', 'Delivery Charge rule added.');
    }

    public function updateCharge(Request $request, $id)
    {
        $charge = DeliveryCharge::findOrFail($id);
        $validated = $request->validate([
            'charge' => 'required|numeric|min:0',
            'is_active' => 'boolean',
        ]);
        
        $validated['is_active'] = $request->has('is_active');
        $charge->update($validated);
        return back()->with('success', 'Delivery Charge rule updated.');
    }

    // Lead Times
    public function storeLeadTime(Request $request)
    {
        $validated = $request->validate([
            'product_type' => 'required|string|max:255',
            'delivery_time' => 'nullable|string|max:255',
            'collection_time' => 'nullable|string|max:255',
            'is_active' => 'boolean',
            'sort_order' => 'integer',
        ]);
        
        $validated['is_active'] = $request->has('is_active');
        DeliveryLeadTime::create($validated);
        return back()->with('success', 'Lead time added.');
    }

    public function updateLeadTime(Request $request, $id)
    {
        $leadTime = DeliveryLeadTime::findOrFail($id);
        $validated = $request->validate([
            'product_type' => 'required|string|max:255',
            'delivery_time' => 'nullable|string|max:255',
            'collection_time' => 'nullable|string|max:255',
            'is_active' => 'boolean',
            'sort_order' => 'integer',
        ]);
        
        $validated['is_active'] = $request->has('is_active');
        $leadTime->update($validated);
        return back()->with('success', 'Lead time updated.');
    }

    // Content Text Blocks
    public function storeContent(Request $request)
    {
        $validated = $request->validate([
            'contents' => 'required|array',
            'contents.*.title' => 'nullable|string|max:255',
            'contents.*.content' => 'nullable|string',
        ]);

        foreach ($validated['contents'] as $key => $data) {
            DeliveryContent::updateOrCreate(
                ['section_key' => $key],
                [
                    'title' => $data['title'],
                    'content' => $data['content'],
                    'is_active' => 1
                ]
            );
        }

        return back()->with('success', 'Delivery content page updated.');
    }
}
