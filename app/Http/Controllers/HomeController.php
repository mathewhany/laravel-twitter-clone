<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Post;

class HomeController extends Controller
{
    public function index()
    {
    	$posts = Post::where('parent_id', null)->orderBy('created_at', 'desc')->get();

    	return view('home', compact('posts'));
    }
}
