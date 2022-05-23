@extends('layouts.admin')
@section('content')
<div class="row justify-content-between">
    <div class="col-12 admin-column">
    <div class="row">
        <h2>Product {{$product->title}}</h2>
    </div>
        <table class="table" cellspacing="0">
            <thead>
                <tr>
                    <th></th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Article number</th>
                    <th scope="col">created at</th>
                </tr>
            </thead>
            <tbody>
                <tr class="borders">
                <td scope="row"><img style="width:250px;heigth:250px;" src="{{url($product->articlePhoto)}}" alt="head"></td>
                    <td scope="row">{{$product->title}}</td>
                    <td scope="row">{{$product->description}}</td>
                    <td scope="row">{{$product->articleNumber}}</td>
                    <td>{{$product->created_at}}</td>
                </tr>
            </tbody>
        </table>
        <div class="row">
        <h3>Category information</h3>
        </div>
        <table class="table" cellspacing="0">
            <thead>
                <tr>
                    <th scope="col">Main category</th>
                    <th scope="col">Sub categories</th>
                </tr>
            </thead>
            <tbody>
                <tr class="borders">
                    <td scope="row">{{$product->name}}</td>
                    <td scope="row">
                    @foreach($subCategories as $subCategory)
                    {{$subCategory->name}} ,
                    @endforeach
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection