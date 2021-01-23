@extends('master')



@section('body')
    

  <div>

    <form class="form-horizontal" action="/product" enctype="multipart/form-data" method="POST">
      {{ csrf_field() }}
      <div class="form-group">
          <label class="control-label col-sm-2" for="name">Name:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
          </div>
      </div>


      <div class="form-group">
          <label class="control-label col-sm-2" for="product_category">Product Category:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="product_category" id="product_category" placeholder="Enter Product Cateory">
          </div>
      </div>

      <div class="form-group">
          <label class="control-label col-sm-2" for="slug">Slug:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="slug" id="slug" placeholder="Enter Slug">
          </div>
      </div>

      <div class="form-group">
          <label class="control-label col-sm-2" for="description">Description:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="description" id="description" placeholder="Enter Description">
          </div>
      </div>

      <div class="form-group">
          <label class="control-label col-sm-2" for="image">Image:</label>
          <div class="col-sm-10">
            <input type="file" class="form-control" name="image" id="image">
          </div>
      </div>

      

      <div class="form-group">
          <label class="control-label col-sm-2" for="price">Price:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="price" id="price" placeholder="Enter Price">
          </div>
      </div>

      <div class="form-group">
          <label class="control-label col-sm-2" for="discount">Discount:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="discount" id="discount" placeholder="Enter Discount">
          </div>
      </div>

      <div class="form-group">
          <label class="control-label col-sm-2" for="stock_quantity">Stock Quantity:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="stock_quantity" id="stock_quantity" placeholder="Enter Stock Quantity">
          </div>
      </div>

      <div class="form-group">
          <label class="control-label col-sm-2" for="status">Status:</label>
          <div class="col-sm-10">
              <select class="form-control" id="status" name="status">
                  <option>active</option>
                  <option>inactive</option>
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

  </div>

@endsection