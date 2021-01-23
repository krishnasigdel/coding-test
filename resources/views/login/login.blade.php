@extends('master')

@section('body')

@if (session()->has('error'))
<div class="alert alert-danger">
    <p>{{ session()->get('error') }}</p>
</div>
@endif
<form class="form-horizontal" action="{{ route('user.login') }}" method="post">
{{ csrf_field() }}
<div class="container">
    <div class="form-group">
        <label class="control-label col-sm-2" for="uname"><b>Username</b></label>
        <div class="col-sm-10">
            <input type="email" class="form-control" placeholder="Enter Username" name="email" required>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="psw"><b>Password</b></label>
        <div class="col-sm-10">
            <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Login</button>
        </div>
    </div>
</div>

</form>

@endsection
