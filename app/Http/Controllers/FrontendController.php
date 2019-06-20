<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Category;

class FrontendController extends Controller
{

    public function timeZone($location){
        return date_default_timezone_set($location);
    }


    public function index()
    {
        $this->timeZone('Asia/Jakarta');
        $hari =  date("Y-m-d");
        $waktu = date("H:i:s");
        $category = Category::paginate(10);
        $news = News::orderBy('created_at', 'DESC')->where('status', 1)->take(6)->get();
        return view('welcome', compact('news','waktu','hari','category'));
    }

    public function detail($id)
    {
    	$news = News::findOrFail($id);
    
        return view('detail', compact('news'));
    }
}
