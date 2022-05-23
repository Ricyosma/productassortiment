<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function index()
    {
        $products = Product::Join('categories', 'products.category_id', '=', 'categories.id')
        ->selectRaw('*, products.id as id')->get();
        return view('admin.index', compact('products'));
    }
}
