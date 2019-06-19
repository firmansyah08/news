<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Category;

class FrontendController extends Controller
{
    public function index()
    {
        $news = News::orderBy('created_at', 'DESC')->where('status', 1)->take(6)->get();
        return view('welcome', compact('news'));
    }

    public function detail($id)
    {
    	$news = News::findOrFail($id);
    
        return view('detail', compact('news'));
    }
}
