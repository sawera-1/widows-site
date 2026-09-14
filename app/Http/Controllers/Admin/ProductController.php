<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('sort_order', 'asc')->paginate(20);
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:products',
            'category' => 'required|string|max:255',
            'description' => 'nullable|string',
            'base_price' => 'nullable|numeric|min:0',
            'is_active' => 'boolean',
            'sort_order' => 'integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'hover_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $product = new Product();
        $product->name = $validated['name'];
        $product->slug = Str::slug($validated['slug']);
        $product->category = $validated['category'];
        $product->description = $validated['description'];
        $product->base_price = $validated['base_price'] ?? 0;
        $product->is_active = $request->has('is_active');
        $product->sort_order = $validated['sort_order'] ?? 0;

        if ($request->hasFile('image')) {
            $imageName = time() . '_primary.' . $request->image->extension();  
            $request->image->move(public_path('assets/products'), $imageName);
            $product->image = $imageName;
        }

        if ($request->hasFile('hover_image')) {
            $hoverName = time() . '_hover.' . $request->hover_image->extension();  
            $request->hover_image->move(public_path('assets/products'), $hoverName);
            $product->hover_image = $hoverName;
        }

        $product->save();

        return redirect()->route('admin.products.index')->with('success', 'Product created successfully.');
    }

    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:products,slug,' . $product->id,
            'category' => 'required|string|max:255',
            'description' => 'nullable|string',
            'base_price' => 'nullable|numeric|min:0',
            'is_active' => 'boolean',
            'sort_order' => 'integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'hover_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $product->name = $validated['name'];
        $product->slug = Str::slug($validated['slug']);
        $product->category = $validated['category'];
        $product->description = $validated['description'];
        $product->base_price = $validated['base_price'] ?? 0;
        $product->is_active = $request->has('is_active');
        $product->sort_order = $validated['sort_order'] ?? 0;

        if ($request->hasFile('image')) {
            // Optionally delete old image if needed
            $imageName = time() . '_primary.' . $request->image->extension();  
            $request->image->move(public_path('assets/products'), $imageName);
            $product->image = $imageName;
        }

        if ($request->hasFile('hover_image')) {
            $hoverName = time() . '_hover.' . $request->hover_image->extension();  
            $request->hover_image->move(public_path('assets/products'), $hoverName);
            $product->hover_image = $hoverName;
        }

        $product->save();

        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        // Check if there are related orders/designs before deleting (optional logic to enforce safety)
        if ($product->designs()->exists()) {
            return back()->with('error', 'Cannot delete product because it has associated designs. Please delete the designs first.');
        }

        $product->delete();
        return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully.');
    }
}
