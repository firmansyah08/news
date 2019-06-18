<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{

    public $data = [];

    public function index()
    {
     
     $category = Category::all();
        foreach($category as $value) {
            $this->data[] = [
                'id' => $value->id,
                'category' => $value->category,
            ];
        }

        $dataJSON = ['category'=>$this->data];
        return response()->json($dataJSON, 200);

    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
        $category = new Category;
        $category->category = $request->category;
        $category->save();

        return response()->json($category, 201);
    }
 
    public function edit($id)
    {
        //
        $category = Category::findOrFail($id);
        return response()->json($category, 200);
    }

    
    public function update(Request $request, $id)
    {
        //
        $category = Category::findOrFail($id);
        $category->category = $request->category;

        $category->save();

        return response()->json($category, 200);
    }

    public function destroy($id)
    {
        //
        $category = Category::findOrFail($id);
        $category->delete();

        return response()->json($category, 204);
    }
}
