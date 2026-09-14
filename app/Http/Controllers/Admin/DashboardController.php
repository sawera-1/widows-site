<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalOrders = Order::count();
        $pendingOrders = Order::where('status', 'pending')->orWhere('status', 'New')->count();
        $completedOrders = Order::where('status', 'Completed')->count();
        $totalRevenue = Order::where('payment_status', 'paid')->sum('total');
        
        $totalCustomers = User::where('role', 'Customer')->count();
        $totalProducts = Product::count();
        
        $recentOrders = Order::with('user')->orderBy('created_at', 'desc')->take(10)->get();

        return view('admin.dashboard', compact(
            'totalOrders', 
            'pendingOrders', 
            'completedOrders', 
            'totalRevenue',
            'totalCustomers',
            'totalProducts',
            'recentOrders'
        ));
    }
}
