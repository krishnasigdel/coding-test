<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{

     /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('customAuth');

    }

    public function index()
    {
        $products = Product::orderBy('id', 'desc')->get();
        return view('product.index', compact('products'));
    }


    public function create()
    {
        $categories = ProductCategory::all();

        return view('product.create', compact('categories'));
    }


    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'product_category' => 'required',
            'description' => 'required',
            'image' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'stock_quantity' => 'required',
        ]);

        $file = $request->file('image');
        $file->move('upload/product/', $file->getClientOriginalName());

        $product = new Product;

        $product->name = $request->name;
        $product->product_category_id = $request->product_category;
        $product->slug = $request->slug;
        $product->description = $request->description;
        $product->image = $file->getClientOriginalName();
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->stock_quantity = $request->stock_quantity;
        $product->status = $request->status;

        $product->created_by = Session::get('loggedInUser')->id;
        $product->modified_by = Session::get('loggedInUser')->id;



        $saved = $product->save();

        if ($saved) {
            session()->flash('successMsg', 'Product Created successfully');
            return redirect('product');
        }
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $categories = ProductCategory::all();
        return view('product.edit',compact('product','categories'));
    }


    public function update(Request $request, $id)
    {

        $validated = $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'product_category' => 'required',
            'description' => 'required',
            'image' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'stock_quantity' => 'required',
        ]);

        $file = $request->file('image');
        $file->move('upload/product/', $file->getClientOriginalName());

        $product = Product::find($id);

        $product->name = $request->name;
        $product->product_category_id = $request->product_category;
        $product->slug = $request->slug;
        $product->description = $request->description;
        $product->image = $file->getClientOriginalName();
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->stock_quantity = $request->stock_quantity;
        $product->status = $request->status;


        $product->modified_by = Session::get('loggedInUser')->id;



        $saved = $product->save();

        if ($saved) {
            session()->flash('successMsg', 'Product Updated successfully');
            return redirect('product');
        }
    }

    public function destroy($id)
    {
        $product = Product::find($id);

        $deleted = $product->delete();

        if ($deleted) {
            session()->flash('successMsg','Product deleted successfully');
            return redirect('product');
        }
    }




}
