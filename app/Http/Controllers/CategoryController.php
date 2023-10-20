<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $data = Category::with('user')->get();

        return view('pages/cms/category', compact('data'));
    }
}
