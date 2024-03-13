<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        echo 'inside index';
        $posts = Post::all();
        echo $posts;
        return response()->json(['posts' => $posts]);
    }
}
