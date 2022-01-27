<?php

namespace App\Http\Controllers\Modules\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use App\Models\Category;

class CategoryController extends Controller
{
    public function add(Request $request)
    {
    	$category = new Category;
    	$category->category_name = $request->category_name;
    	$category->category_name = $request->category_name;
    }
}
