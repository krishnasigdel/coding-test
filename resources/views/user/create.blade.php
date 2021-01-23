@extends('master')



@section('body')
    
<form class="form-horizontal" action="/user" enctype="multipart/form-data" method="POST">
  {{ csrf_field() }}
  <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
      </div>
  </div>

  <div class="form-group">
      <label class="control-label col-sm-2" for="gender">Gender:</label>
      <div class="col-sm-10">
          <label class="control-label radio-inline"><input type="radio" name="gender" value="male">Male</label>
          <label class="control-label radio-inline"><input type="radio" name="gender" value="female">Female</label>
          <label class="control-label radio-inline"><input type="radio" name="gender" value="others">Others</label>
  
      </div>
      </div>

  <div class="form-group">
      <label class="control-label col-sm-2" for="phone">Phone:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone">
      </div>
  </div>

  <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
      </div>
  </div>

  <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Enter password">
      </div>
    </div>

  <div class="form-group">
      <label class="control-label col-sm-2" for="address">Address:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="address" id="address" placeholder="Enter Address">
      </div>
  </div>

  <div class="form-group">
      <label class="control-label col-sm-2" for="nationality">Nationality:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="nationality" id="nationality" placeholder="Enter Nationality">
      </div>
  </div>

  <div class="form-group">
      <label class="control-label col-sm-2" for="dob">Date of Birth:</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" name="dob" id="dob" placeholder="Enter Date of Birth">
      </div>
  </div>

  <div class="form-group">
      <label class="control-label col-sm-2" for="education">Education Background:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="education" id="education" placeholder="Enter Education Background">
      </div>
  </div>

  <div class="form-group">
      <label class="control-label col-sm-2" for="image">Image:</label>
      <div class="col-sm-10">
        <input type="file" class="form-control" name="image" id="image">
      </div>
  </div>
  
  <div class="form-group">
      <label class="control-label col-sm-2" for="contact_mode">Preferred Mode of Contact:</label>
      <div class="col-sm-10">
          <select class="form-control" id="contact_mode" name="contact_mode">
              <option value="email">email</option>
              <option value="phone">phone</option>
              <option value="none">none</option>
          </select>
      </div>
    </div>

  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
@endsection