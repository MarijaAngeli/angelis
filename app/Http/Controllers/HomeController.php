<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tag;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home')->with('user_count',User::all()->count())
                            ->with('post_count',Post::all()->count())
                           ->with('trashed_count',Post::onlyTrashed()->get()->count())
                           ->with('categories_count',Category::all()->count())
                           ->with('tags_count',Tag::all()->count());
    }
}
