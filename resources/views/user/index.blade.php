@extends('master')


@section('body')
    
  <div>

    <div>
      <a href="{{ url('category/create') }}" class="btn btn-primary">Add Product Category</a><br>
      <a href="{{ url('product/create') }}" class="btn btn-primary">Add Product</a>
      <h3>Users List </h3>
    </div>
    <table class="table table-striped">
        <thead>
          <tr>
            <th>Name</th>
            <th>Gender</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Address</th>
            <th>Nationality</th>
            <th>DOB</th>
            <th>Education</th>
            <th>Image</th>
            <th>Contact Mode</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->gender }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->address }}</td>
                <td>{{ $user->nationality }}</td>
                <td>{{ $user->dob }}</td>
                <td>{{ $user->education }}</td>
                <td><img src="{{url('upload/'.$user->image)}}" alt="User" height="50" width="50"></td>
                <td>{{ $user->contact_mode }}</td>
                <td>
                  <a href="{{ url('user/'.$user->id.'/edit') }}" class="btn btn-info">Edit</a>
                  <form action="/user/{{$user->id}}" class="pull-right" method="post" >
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