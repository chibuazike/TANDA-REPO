<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //dd($request->user());
        // $user = Auth::user();
        // if($user->role !== 'admin'){
        //     return redirect('/dashboard');
        // }
        $posts = Post::all();
        return view('posts.index', [
            "posts" => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('posts.create',[
            "categories" => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            "title" => "required|max:191",
            "content" => "required",
            "published" => "required|boolean",
            "featured_image" => "required|mimes:jpg,png,bmp,gif|file",
            "category_id" => "required"
        ];
        $request->validate($rules);
        $post = new Post();
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->content = $request->content;
        $post->category_id = $request->category_id;
        $post->published = $request->published;    
        
        $path = $request->file('featured_image')->store('posts');
        $post->featured_image = $path;
        $post->save();
        return redirect(route('posts.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);$categories = Category::all();
        return view('posts.edit', [
            'post' => $post, "categories" => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'title' => 'max:191|required',
            'published' => 'required',
            'content' => 'required',
            'featured_image' => 'mimes:jpg,png,bmp,gif',
            "category_id" => "required"
        ];
        $request->validate($rules);
        $post = Post::find($id);
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->content=$request->content;
        $post->category_id = $request->category_id;
        $post->published = $request->published;
         if($request->file('featured_image')) {
            $path = $request->file('featured_image')->store('posts');
            $post->featured_image = $path;
        }
        $post->update();
        return redirect(route('posts.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect(route('posts.index'));
    }
}
