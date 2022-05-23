<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Validator;
class CategorieController extends Controller
{
    public function index()
    {
        $categories = Category::where('parent_id', null)->orderby('name', 'asc')->get();
            return view('admin.create.category', compact('categories'));
    }

    public function create(){
        // validation, if fail, redirect back to form
        $data =  Validator::make(request()->all(), [
            'categories' => 'required',
        ]);

        if ($data->fails()) {
            return redirect('/admin/create/createCategory')->withErrors($data)->withInput();
        }

        //write categorie in DB
        Category::create([
            'name' => request('categories'),
            'parent_id' => request('parent_id')
        ]);

        return redirect('/admin');
    }
}
