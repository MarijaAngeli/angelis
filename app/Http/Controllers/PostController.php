<?php
namespace App\Http\Controllers;
use App\Authorizable;
use App\Post;
use App\Category;
use App\Tag;
use Image;
use Storage;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class PostController extends Controller
{
    use Authorizable;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Post::latest()->with('user')->paginate();
        return view('post.index')->with('result',$result)
                                ->with('categories',Category::all());
                                
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();   
        if($categories->count() == 0 || $tags->count() == 0){
            flash('You must have some categories and tags before attempting to create a post.');
            return redirect()->back();
        }
        return view('post.new')->with('categories',$categories)
                                ->with('tags',$tags);
                                
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:10',
            'body' => 'required|min:200',
            'category_id'=>'required',
            'tags'=>'required',
            'image'=>'required|image'
        ]);

        $image = $request->image;
        $image_new_name = time(). '.' .$image->getClientOriginalName();
        Image::make($image)->resize(750,300)->save();
        $image->move('uploads/posts',$image_new_name);

        $post = Post::create([
            'title' => $request->title,
            'image' => 'uploads/posts/'.$image_new_name,
            'body' => $request->body,
            'category_id' => $request->category_id,
            'user_id' => Auth::id(),
            'slug' => str_slug($request->title)

        ]);

        $post->tags()->attach($request->tags);
        flash('Post has been added');
        return redirect()->route('posts.index');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $post = Post::findOrFail($post->id);
        return view('post.edit')->with('post',$post)
                                ->with('categories',Category::all())
                                ->with('tags',Tag::all());
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {

        $this->validate($request, [
            'title' => 'required|min:10',
            'body' => 'required|min:200',
            'category_id'=> 'required',
            'tags'=>'required',
            'image'=>'required|image'
        ]);
      
        
        $me = $request->user();
        if( $me->hasRole('Admin') ) {
            $post = Post::findOrFail($post->id);
        } else {
            $post = $me->posts()->findOrFail($post->id);
        }

        if ($request->hasFile('image')){
            $image = $request->image;
            $image_new_name = time() . '.' . $image->getClientOriginalName();
            Image::make($image)->resize(750,300)->save();
            $image->move('uploads/posts',$image_new_name);
            $oldImagename = $post->image; //delete old file from folder
            if (File::exists($oldImagename)) {
                File::delete($oldImagename);
            }
            $post->image = 'uploads/posts/'.$image_new_name; //update the database
            
 
        }
        $post->title = $request->title;
        $post->body = $request->body;
        $post->category_id = $request->category_id;

        $post->save();

        $post->tags()->sync($request->tags);
        flash()->success('Post has been updated.');
        return redirect()->route('posts.index');
    }
    public function publish(Request $request, $id){
        $input = $request->all();
        $post = Post::findOrFail($id);
        $post->update($input);
        flash()->success('Post status is changed');
        return back();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $me = Auth::user();
        if( $me->hasRole('Admin') ) {
            $post = Post::findOrFail($post->id);
        } else {
            $post = $me->posts()->findOrFail($post->id);
        }
        File::delete($post->image);
        $post->delete();
        flash()->success('Post has been deleted.');
        return redirect()->route('posts.index');
    }

    public function trashed(){
        $posts = Post::onlyTrashed()->latest()->paginate();
        return view('post.trashed')->with('posts', $posts);
    }
    public function kill($id){
        $post = Post::withTrashed()->where('id', $id)->first();
        $post->forceDelete();
        flash()->success('Post deleted permanently');
        return redirect()->back();
    }
    public function restore($id){
        $post = Post::withTrashed()->where('id',$id)->first();
        $post->restore();
        flash()->success('Post restored successfully');
        return redirect()->route('posts.index');
    }
    
}
