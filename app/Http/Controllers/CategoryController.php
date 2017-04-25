<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryModel;
class CategoryController extends Controller
{
    public function manageCategory(){

    	$categories = CategoryModel::where('parent_id', 0)->get();
    	$allCategories = CategoryModel::pluck('title', 'id')->all();
    	return view('category.category_tree_view', compact('categories', 'allCategories'));
    }

    public function addCategory(Request $request){
    	$data = $request->all();
    	$data['parent_id'] = $request->has('parent_id')?$request->parent_id:0;
    	CategoryModel::create($data);
    	return back()->with('success', 'New Category added successfully');
    }
}
