<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCategory;

class ProductCategoryController extends Controller
{

    public function index()
    {
        $categories = ProductCategory::orderBy('id','desc')->get();
        return view('category.index',compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }
    
    public function store(Request $request)
    {
        
        $validated = $request->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);

        $category = new ProductCategory;

        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->rank = $request->rank;
        
        $saved = $category->save();
        
        if ($saved) {
            session()->flash('successMsg','Category Created successfully');
            return redirect('category');
        }
    }


    public function edit($id)
    {
        $category = ProductCategory::find($id);
        return view('category.edit',compact('category'));
    }
    

    public function update(Request $request, $id)
    {
        
        $validated = $request->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);

        $category = ProductCategory::find($id);

        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->rank = $request->rank;
        
        $saved = $category->save();
        
        if ($saved) {
            session()->flash('successMsg','Category Updated successfully');
            return redirect('category');
        }
    }

    public function destroy($id)
    {
        $category = ProductCategory::find($id);
        
        $deleted = $category->delete();

        if ($deleted) {
            session()->flash('successMsg','Category deleted successfully');
            return redirect('category');
        }
    }

}

