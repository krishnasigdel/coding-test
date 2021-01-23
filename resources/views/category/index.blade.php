@extends('master')


@section('body')
    
  <div>

    <div>
      <a href="{{ url('category/create') }}" class="btn btn-primary">Add Product Category</a><br>
      <a href="{{ url('product/create') }}" class="btn btn-primary">Add Product</a>
      <h3>Product Categories </h3>
    </div>
    <table class="table table-striped">
        <thead>
          <tr>
            <th>Name</th>
            <th>Slug</th>
            <th>Rank</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            
            @foreach ($categories as $category)
            <tr>
                <td>{{ $category->name }}</td>
                <td>{{ $category->slug }}</td>
                <td>{{ $category->rank }}</td>
                <td>
                  <a href="{{ url('category/'.$category->id.'/edit') }}" class="btn btn-info">Edit</a>
                  <form action="/category/{{$category->id}}" class="pull-right" method="post" >
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                </td>
            </tr>
            @endforeach

        </tbody>
      </table>

  </div>

@endsection