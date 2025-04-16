<?php

namespace App\Http\Controllers\Backend\admin\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function __construct()
    {
        $auth = $this->middleware('auth');
        if (!$auth) {
            return redirect()->route('login');
        }
    }

    public function index()
    {
        return view('backend.admin.dashboard.index');
    }
    public function products()
    {
        $products = Product::all();
        return view('backend.admin.dashboard.products', compact('products'));
    }
}
