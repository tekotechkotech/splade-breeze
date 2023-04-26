<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\SpladeTable;

class PostController extends Controller
{
    
    public function index()
    {
        return view('post',[
            'posts' => SpladeTable::for(Post::class)
            ->column(
                'title',
                // key:"title",
                canBeHidden:false,
                sortable:true,
                searchable:true,
                label:"Judul Post",
                )
            ->withGlobalSearch(columns: ['title', 'slug', 'description', 'category_id'])
            ->column('slug')
            ->column('description')
            ->column('category_id')
            ->paginate(5),
        ]);
    }
}
