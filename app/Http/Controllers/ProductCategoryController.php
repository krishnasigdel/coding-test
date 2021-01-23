<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function create()
    {
        return view('category.create');
    }
}
