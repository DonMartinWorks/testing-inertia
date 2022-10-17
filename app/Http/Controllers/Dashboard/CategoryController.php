<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function create()
    {
        return inertia("Dashboard/Category/Create");
    }

    public function store(Request $request)
    {
        Category::create(
            [
                'title' => request('title'),
                'slug' => request('slug'),
            ]
        );
        dd($request->all());
    }
}
