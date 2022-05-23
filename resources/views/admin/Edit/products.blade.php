@extends('layouts.admin')
@section('content')
    <body>
        <div class="row justify-content-between">
            <form class="create-field" action='/admin/edit/product' id="typeForm" method='post' enctype="multipart/form-data">
        <h2>Add categories</h2>
        @csrf
        @method('PATCH')
        <input type="hidden" name="id" value="{{ $product->id }}"/>
        <div class="form-group">
            <label for="categories">Title</label>
            <input type='text' name="title" class="form-control" value="{{$product->title}}" placeholder='categorie name'>
        </div>
        <div class="form-group">
            <label for="categories">article number</label>
            <input type='text' name="articleNumber" class="form-control" value="{{$product->articleNumber}}" placeholder='article number'>
        </div>
        <div class="form-group">
            <label for="categories">Description</label>
            <textarea type='text' name="description" value="{{$product->description}}" class="form-control" placeholder='Description'>{{$product->description}}</textarea>
        </div>

        <div class="form-group">
                    <label>If sub category, pls select parent</label>
                    <select type="text" name="category" class="form-control">
                        <option value="{{$product->id}}">{{$product->name}}</option>
                        <option disabled>Select a category</option>
                        @if($categories)
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <button type='submit' class="col-5 align-self-center btn-download rounded ">Submit</button>
            </form>
        </div>
    </body>
</html>
@endsection