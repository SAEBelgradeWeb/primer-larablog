<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class ApiPostsController extends Controller
{

    public function index()
    {
        return Post::with(['category', 'user'])->orderBy('created_at', 'desc')->get();
    }
    public function store(Request $request)
    {
        $request->merge([
            'user_id'=> \Auth::user()->id
        ]);

        return Post::create($request->all());

    }
}
