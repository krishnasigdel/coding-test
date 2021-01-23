@extends('master')



@section('body')


    <div>

        <form class="form-horizontal" action="{{ url('product/'.$product->id) }}" enctype="multipart/form-data" method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="form-group">
                <label class="control-label col-sm-2" for="name">Name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" value="{{$product->name}}" id="name" placeholder="Enter Name">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="product_category">Product Category:</label>
                <div class="col-sm-10">
                    <select class="form-control" name="product_category">
                        <option value="">Select Product Category...</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="slug">Slug:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="slug" value="{{$product->slug}}" id="slug" placeholder="Enter Slug">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="description">Description:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="description" value="{{$product->description}}" id="description"
                        placeholder="Enter Description">
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
                    <input type="text" class="form-control" name="price" value="{{$product->price}}" id="price" placeholder="Enter Price">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="discount">Discount:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="discount" value="{{$product->discount}}" id="discount" placeholder="Enter Discount">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="stock_quantity">Stock Quantity:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="stock_quantity" value="{{$product->stock_quantity}}" id="stock_quantity"
                        placeholder="Enter Stock Quantity">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="status">Status:</label>
                <div class="col-sm-10">
                    <select class="form-control" id="status" name="status">
                        <option value="active" @php echo $product->status == "active" ? "selected": ""; @endphp>active</option>
                        <option value="inactive" @php echo $product->status == "inactive" ? "selected": ""; @endphp>inactive</option>
                    </select>
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
