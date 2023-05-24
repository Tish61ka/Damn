<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(Request $request)
    {
        $img = $request->file('img');
        $img->move(public_path('img'), $img->getClientOriginalName());
        Product::create([
            'title' => $request->input('title'),
            'price' => $request->input('price'),
            'year' => $request->input('year'),
            'count' => $request->input('count'),
            'model' => $request->input('model'),
            'category' => $request->input('category'),
            'img' => '/img/' . $img->getClientOriginalName(),
        ]);
        return back();
    }

    public function show()
    {
        return Product::all();
    }

    public function delete($id)
    {
        Product::where('id', $id)->delete();

        return back();
    }
}
