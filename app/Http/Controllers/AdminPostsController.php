<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\PostCreateRequest;
use App\Photo;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class AdminPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        $route = Route::currentRouteName();
        if(!$route=="index"){
            return view("admin.posts.index", compact("posts"));
        }
        else{
            return view("index", compact("posts"));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view("admin.posts.create", compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostCreateRequest $request)
    {
        if($request->hasFile("image")){
            $filename = $request->file("image")->getClientOriginalName();
            $store = $request->file("image")->storeAs("public/images", $filename);
            $record = Photo::create(["name"=>$filename]);
        }
        $input = $request->all();
        $input["category_id"] = $request->get("category");
        $input["user_id"] =  Auth::user()->id ;
       $input["photo_id"] = $record->id;
     $save = Post::create($input);
       return back()->with("message", "User created successfully");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findorFail($id);
        return view("blog", compact("post"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findorFail($id);
        $categories = Category::all();
        return view("admin.posts.edit", compact("post", "categories"));
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
        $post = Post::findorFail($id);
        $input = $request->all();
        if($request->hasFile("image")){
            $filename = $request->file("image")->getClientOriginalName();
            $store = $request->file("image")->storeAs("public/images", $filename);
            $post->photo->name = $filename;
            $post->photo->save();
        }
        $save = $post->update($input);
        return back()->with("message", "User successfully updated");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findorFail($id);
        unlink(public_path() . $post->photo->name);
        $post->delete();

        return back()->with("message", "User deleted");
    }
}
