@extends('layouts.admin')
@section('content')
    <body>
    @if ( auth()->user())
    <h1>hoi</h1>
    @endif
        <div class="row justify-content-between">
            <h1 class="dashboard-title col-12">Dashboard</h1>
            <div class="col-12 admin-column">
        <div class="row">
            <h2 class="col">Producten</h2>
        </div>
        <table class="table" cellspacing="0">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Category</th>
                    <th scope="col">Article number</th>
                    <th scope="col">View full product</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($products as $product)
                <tr>
                    @csrf
                    @method('PATCH')
                    <td class="align-middle">{{ old('title') ?? $product->title }}</td>
                    <td class="align-middle">{{ old('title') ?? Str::limit($product->description, 50) }}</td>
                    <td class="align-middle">{{ old('category') ?? $product->name }}</td>
                    <td class="align-middle">{{ old('category') ?? $product->articleNumber }}</td>                    
                    <td class="align-middle">
                        <a href="/admin/view/product/{{ old('id') ?? $product->id }}">
                        View product
                        </a>
                    </td>
                    <td class="align-middle">
                        <a href="/admin/edit/product/{{ old('id') ?? $product->id }}">
                        Edit
                        </a>
                    </td>
                    <td class="align-middle">
                    <a>
                    <form action="/admin/delete/product" method="post" enctype="multipart/form-data">@csrf 
                    <input
                      type="hidden" name="id" value="{{ $product->id}}">
                        <button type='submit' id="deleteUserBtn" class='btn btn-delete'>
                        Delete product
                        </button>
                    </form>
                    </a>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
    </body>
@endsection
