<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Category;
use App\Post;
class CategoriesController extends Controller
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
        $categories = Category::orderBy('created_at', 'desc')->paginate(10);
        return view('categories.index')->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
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
            'category' => 'required',
            'category_image' => 'required|max:1999',
            'url' => 'required | regex:/^[a-zA-Z0-9_]*$/'
        ]);
        // CHECKS IF CATEGORY ALREADY EXISTS IN TABLE
        $oldCategory = Category::where('category', $request->input('category'))->first();
        if ($oldCategory){
            return redirect('/categories')->with('error', 'Category already exists.');
        } else {
            // Handle File Upload
            // Get Filename Without Extension
            $filenameWithExt = $request->file('category_image')->getClientOriginalName();
            // Get Just Filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get Just Extension
            $extension = $request->file('category_image')->getClientOriginalExtension();
            // Filename to Store
            $filenameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('category_image')->storeAs('public/images', $filenameToStore);

            $category = new Category;
            $category->category = $request->input('category');
            $category->url = $request->input('url');
            $category->category_image = $filenameToStore;
            $category->save();
            return redirect('/categories')->with('success', 'Category has been created!');
        }
    } 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($url)
    {
        $category = Category::where('url', $url)->take(1)->get()[0]; 
        $posts = Post::where('categories', 'like', '%'.$category->category.'%')->orderby('created_at', 'desc')->paginate(10);
        return view('categories.show')->with('category', $category)->with('posts', $posts);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($url)
    {
        $category = Category::where('url', $url)->take(1)->get()[0]; 
        Storage::delete('public/images/'.$category->category_image);
        $category->delete();

        return redirect('/categories')->with('success', 'Category has been deleted!');
    }
}
