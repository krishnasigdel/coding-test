@extends('master')



@section('body')
    

    <form class="form-horizontal" action="{{ url('category/'.$category->id) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="form-group">
            <label class="control-label col-sm-2" for="name">Name:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="name" value="{{$category->name}}" id="name" placeholder="Enter Name">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="slug">Slug:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="slug" value="{{$category->slug}}" id="slug" placeholder="Enter Slug">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="rank">Rank:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="rank" value="{{$category->rank}}" id="rank" placeholder="Enter Rank">
            </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Update</button>
          </div>
        </div>
    </form>

    @endsection