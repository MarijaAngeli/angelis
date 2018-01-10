<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\User;
use App\Tag;
use Auth;


class BlogController extends Controller
{
   
    public function index(){
        $posts = Post::where('status',1)->orderBy('created_at','desc')->paginate(3);

        return view('pages.blog')->with('categories',Category::take(4)->get())
                                 ->with('users',User::all())
                                 ->with('posts',$posts);
    }

    public function singlePost($slug){

        $post = Post::where('slug', $slug)->first();
        $next_id = Post::where('id','>',$post->id)->min('id');
        $prev_id = Post::where('id','<',$post->id)->max('id');

        return view('pages.single_blog')->with('post', $post)
                                        ->with('title',$post->title)
                                        ->with('categories',Category::take(4)->get())
                                        ->with('users',User::all())
                                        ->with('tags',Tag::all())
                                        ->with('next',Post::find($next_id))
                                        ->with('prev',Post::find($prev_id));

    }

    public function category($id){
        $category = Category::find($id);
        return view('category')->with('category',$category)
                               ->with('title',$category->name)
                               ->with('categories', Category::take(4)->get()); 
    }

    public function tag($id){
        $tag = Tag::find($id);
        return view('tag')->with('tag',$tag)
                          ->with('title', $tag->tag); 
    }
}

    
   
    