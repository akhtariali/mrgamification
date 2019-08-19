<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function __construct(){
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('blog.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
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
            'title' => 'required',
            'body' => 'required',
            'categories' => 'required',
            'author' => 'required',
            'cover_image' => 'required|max:1999',
            'url' => 'required|unique:posts|regex:/^[a-zA-Z0-9_]*$/',
            'meta' => 'required',
        ]);

        // Handle File Upload
        // Get Filename Without Extension
        $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
        // Get Just Filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        // Get Just Extension
        $extension = $request->file('cover_image')->getClientOriginalExtension();
        // Filename to Store
        $filenameToStore = $filename.'_'.time().'.'.$extension;
        // Upload Image
        $path = $request->file('cover_image')->storeAs('public/images', $filenameToStore);


        // Create Post
        $post = new Post;
        $post->title = $request->input('title');
        $post->secondary_title = $request->input('secondary_title');
        $post->body = $request->input('body');
        $post->categories = implode(",", $request->input('categories'));
        $post->author = $request->input('author');
        $post->url = $request->input('url');
        $post->meta = $request->input('meta');
        $post->cover_image = $filenameToStore;
        $post->save();
        
        return redirect('/blog')->with('success', 'Post has been published!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($url)
    {
        $post = Post::where('url', $url)->take(1)->get()[0]; 
        // Creates an array of post categories, and replaces " " with "-" in categories
        $post->categories = explode(",", $post->categories);
        //
        return view('blog.show')->with('post', $post);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($url)
    {
        $post = Post::where('url', $url)->take(1)->get()[0]; 
        return view('blog.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $url)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'categories' => 'required',
            'author' => 'required',
            'meta' => 'required'
        ]);

        if($request->hasFile('cover_image')){
            // Handle File Upload
            // Get Filename Without Extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get Just Filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get Just Extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to Store
            $filenameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('cover_image')->storeAs('public/images', $filenameToStore);
        }

        $post = Post::where('url', $url)->take(1)->get()[0]; 
        // Creates an array of post categories, and replaces " " with "-" in categories
        $post->categories = str_replace(" ","-", explode(",", $post->categories));
        // Update Post
        $post->title = $request->input('title');
        $post->secondary_title = $request->input('secondary_title');
        $post->body = $request->input('body');
        $post->categories = $request->input('categories');
        $post->author = $request->input('author');
        $post->meta = $request->input('meta');
        if($request->hasFile('cover_image')){
            $post->cover_image = $filenameToStore;
        }
        $post->save();
        
        return redirect('/blog')->with('success', 'Post has been updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($url)
    {
        $post = Post::where('url', $url)->take(1)->get()[0]; 
        Storage::delete('public/images/'.$post->cover_image);
        $post->delete();

        return redirect('/blog')->with('success', 'Post has been deleted!');
    }
}
