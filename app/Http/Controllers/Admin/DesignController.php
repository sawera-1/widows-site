<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WindowDoorDesign;
use Illuminate\Http\Request;

class DesignController extends Controller
{
    public function index()
    {
        $designs = WindowDoorDesign::with('product')->orderBy('sort_order', 'asc')->paginate(20);
        return view('admin.designs.index', compact('designs'));
    }
}
