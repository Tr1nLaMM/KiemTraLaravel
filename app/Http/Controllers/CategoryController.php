<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;

class CategoryController extends Controller
{
    public function getCategory()
    {
        $listCategory=Category::all();
        return view('listcategories',compact('listCategory'));
    }
}
