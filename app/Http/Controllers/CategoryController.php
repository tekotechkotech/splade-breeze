<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\SpladeTable;

class CategoryController extends Controller
{
    public function index()
    {
        return view('category',[
            'categories' => SpladeTable::for(Category::class)
            ->column('name')
            ->column('slug')
            ->paginate(5),
        ]);
    }
}
