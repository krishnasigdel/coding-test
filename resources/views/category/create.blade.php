@extends('master')



<body>
    <form class="form-horizontal" action="/category" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="control-label col-sm-2" for="name">Name:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="slug">Slug:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="slug" id="slug" placeholder="Enter Slug">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="rank">Rank:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="rank" id="rank" placeholder="Enter Rank">
            </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Submit</button>
          </div>
        </div>
    </form>
</body>