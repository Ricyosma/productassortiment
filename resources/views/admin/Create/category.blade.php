@extends('layouts.admin')
@section('content')
    <form class="create-field" action='/admin/create/categorie' id="typeForm" method='post' enctype="multipart/form-data">
        <h2>Add categories</h2>
        @csrf
    <div class="box-body">
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Category name</label>
                    <input type="text" name="categories" class="form-control" placeholder="Category name" value="{{old('name')}}" required />
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label>If sub category, pls select parent</label>
                    <select type="text" name="parent_id" class="form-control">
                        <option value="">None</option>
                        @if($categories)
                            @foreach($categories as $category)
                                <?php $dash=''; ?>
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
            <button type='submit' class="col-5 align-self-center btn-download rounded ">Submit</button>
        </div>
    </div>
    </form>
        @endsection