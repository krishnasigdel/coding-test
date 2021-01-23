@extends('master')

@section('body')
    <a href="{{url('login')}}" class="btn btn-primary" >Log In</a>
    <a href="{{url('register')}}" class="btn btn-success" >Register</a>
@endsection
