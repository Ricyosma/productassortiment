<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Validator;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {

        $categories = Category::where('parent_id', null)->get();
        return view('admin.create.product', compact('categories'));
    }

    public function create(){
         // validation, if fail, redirect back to form
        $data =  Validator::make(request()->all(), [
            'title' => 'required',
            'articleNumber' => 'required',
            'description' => 'required',
            'category' => 'required'
        ]);

        if ($data->fails()) {
            return redirect('/admin/create/createProduct')->withErrors($data)->withInput();
        }

        $imageName = request()->file('picture')->getClientOriginalName();
        $imagePath = request()->file('picture')->move('images', $imageName);

        //write categorie in DB
        Product::create([
            'title' => request('title'),
            'articlePhoto' => $imagePath,
            'articleNumber' => request('articleNumber'),
            'description' => request('description'),
            'category_id' => request('category')
        ]);

        return redirect('/admin');
    }

    public function edit($id){
        $product = Product::where('products.id', $id)->Join('categories', 'products.category_id', '=', 'categories.id')->get()->first();
        $categories = Category::where('parent_id', null)->get();
        return view('admin.edit.products', compact('product', 'categories'));

       return redirect('/admin');
   }

   public function update(){
    $data =  Validator::make(request()->all(), [
        'id' => 'required',
        'title' => 'required',
        'articleNumber' => 'required',
        'description' => 'required',
        'category' => 'required'
    ]);

    Product::where("id", request('id'))->update([
        'title' => request('title'),
        'articlePhoto' => 'sdasd',
        'articleNumber' => request('articleNumber'),
        'description' => request('description'),
        'category_id' => request('category')
    ]);

    return redirect('/admin');
   }

   public function delete()
   {
       Product::where('id', request('id'))->delete();
       return redirect('/admin');
   }

   public function view($id)
   {
       $product = Product::where('products.id', $id)->Join('categories', 'products.category_id', '=', 'categories.id')->get()->first();
       $subCategories = Category::where('parent_id', $product->category_id)->get();
       return view('admin.view.product', compact('product', 'subCategories'));
   }
}
