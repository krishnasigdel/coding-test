@extends('master')



<body>
    <form class="form-horizontal" action="{{ url('user/'.$user->id) }}" enctype="multipart/form-data" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="form-group">
            <label class="control-label col-sm-2" for="name">Name:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="name" value="{{$user->name}}" id="name" placeholder="Enter Name">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="gender">Gender:</label>
            <div class="col-sm-10"> 
             
                <label class="control-label radio-inline"><input type="radio" name="gender" value="male" @php echo $user->gender == "male" ? "checked": ""; @endphp>Male</label>
                <label class="control-label radio-inline"><input type="radio" name="gender" value="female" @php echo $user->gender == "female" ? "checked": ""; @endphp>Female</label>
                <label class="control-label radio-inline"><input type="radio" name="gender" value="others" @php echo $user->gender == "others" ? "checked": ""; @endphp>Others</label>
        
            </div>
            </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="phone">Phone:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="phone" value="{{$user->phone}}" id="phone" placeholder="Enter Phone">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" name="email" value="{{$user->email}}" id="email" placeholder="Enter email">
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
              <input type="text" class="form-control" name="address" value="{{$user->address}}" id="address" placeholder="Enter Address">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="nationality">Nationality:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nationality" value="{{$user->nationality}}" id="nationality" placeholder="Enter Nationality">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="dob">Date of Birth:</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" name="dob" value="{{$user->dob}}" id="dob" placeholder="Enter Date of Birth">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="education">Education Background:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="education" value="{{$user->education}}" id="education" placeholder="Enter Education Background">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="image">Image:</label>
            <div class="col-sm-10">
              <input type="file" class="form-control" name="image" value="{{url('upload/'.$user->image)}}" id="image">
            </div>
        </div>
        
        <div class="form-group">
            <label class="control-label col-sm-2" for="contact_mode">Preferred Mode of Contact:</label>
            <div class="col-sm-10">
                <select class="form-control" id="contact_mode" name="contact_mode">
                    <option value="eamil" @php echo $user->contact_mode == "eamil" ? "selected": ""; @endphp>email</option>
                    <option value="phone" @php echo $user->contact_mode == "phone" ? "selected": ""; @endphp>phone</option>
                    <option value="none" @php echo $user->contact_mode == "none" ? "selected": ""; @endphp>none</option>
                </select>
            </div>
          </div>

        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Update</button>
          </div>
        </div>
      </form>
</body>