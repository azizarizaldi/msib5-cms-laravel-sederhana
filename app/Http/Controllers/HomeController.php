<?php

namespace App\Http\Controllers;

use App\Models\Article;

class HomeController extends Controller
{
    public function index()
    {
        
        $data = Article::with('user','category')->get();
        return view('pages/landing/home', compact('data'));
    }
}
