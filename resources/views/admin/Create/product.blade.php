@extends('layouts.admin')
@section('content')
    <body>
        <div class="row justify-content-between">
                <form class="create-field" action='/admin/create/product' id="typeForm" method='post' enctype="multipart/form-data">
        <h2>Add categories</h2>
        @csrf
        <div class="form-group">
            <label for="categories">Title</label>
            <input type='text' name="title" class="form-control" placeholder='categorie name'>
        </div>
        <div class="form-group">
            <label for="categories">article number</label>
            <input type='text' name="articleNumber" class="form-control" placeholder='article number'>
        </div>
        <div class="form-group">
            <label for="categories">Description</label>
            <textarea type='text' name="description" class="form-control" placeholder='Description'></textarea>
        </div>

        <div class="form-group">
            <label for="categories">Picture</label>
            <input type='file' name="picture" class="form-control">
        </div>

        <div class="form-group">
                    <label>If sub category, pls select parent</label>
                    <select type="text" name="category" class="form-control">
                        <option value="">None</option>
                        @if($categories)
                            @foreach($categories as $category)
                                <?php $dash=''; ?>
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