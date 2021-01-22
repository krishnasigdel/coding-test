@extends('master')

<body>
    <h3>Users List</h3>
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
            </tr>
            @endforeach

        </tbody>
      </table>
</body>