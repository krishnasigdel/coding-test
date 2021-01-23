@extends('master')

@section('body')

<div>
    <p><a href="{{ url('category/create') }}" class="btn btn-primary">Add Product Category</a></p>
    <p><a href="{{ url('product/create') }}" class="btn btn-primary">Add Product</a></p>
    <h3>Products List </h3>
</div>

<table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Category</th>
        <th>Slug</th>
        <th>Description</th>
        <th>Image</th>
        <th>Price</th>
        <th>Discount</th>
        <th>Stock Quantity</th>
        <th>Status</th>
        <th>Created By</th>
        <th>Updated By</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->product_category_id }}</td>
            <td>{{ $product->slug }}</td>
            <td>{{ $product->description }}</td>
            <td><img src="{{url('upload/product/'.$product->image)}}" alt="Product_img" height="50" width="50"></td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->discount }}</td>
            <td>{{ $product->stock_quantity }}</td>
            <td>{{ $product->status }}</td>
            <td>{{ $product->created_by }}</td>
            <td>{{ $product->modified_by }}</td>
            <td>
              <a href="{{ url('product/'.$product->id.'/edit') }}" class="btn btn-info">Edit</a>
              <form action="/product/{{$product->id}}" class="pull-right" method="post" >
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </td>
        </tr>
        @endforeach

    </tbody>
  </table>

@endsection
