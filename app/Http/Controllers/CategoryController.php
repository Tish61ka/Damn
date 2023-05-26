<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create_category(Request $request)
    {
        Category::create([
            'category' => $request->input('category')
        ]);

        return redirect('/admin');
    }
}
