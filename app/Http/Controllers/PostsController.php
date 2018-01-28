<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use Auth;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'blog']);
    }

    public function index()
    {
        //$posts = Post::orderBy('created_at','desc')->paginate(10)->get();
        $posts = Posts::all();
        return view('posts.index')->with('posts', $posts);

    }
    public function blog()
    {
        $this->middleware('guest');
        $posts = Posts::all();
        return view('blog')->with('posts', $posts);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->hasFile('post_image')) {

            \Cloudder::upload($request->file('post_image'));
            $c = \Cloudder::getResult();

            if ($c) {
                $post = new Posts;
                $post->title = $request->title;
                $post->body = $request->body;
                $post->author = Auth::user()->name;
                $post->category = "News";
                $post->tags = "Economy";
                $post->post_image = $c['url'];

                if ($post->save() == true) {
                    return view('success');
                } else {
                    return "Error try again";
                }
            }
        }
        else{
            return "Kinldy put in an image";
        }

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
        $post = Posts::find($id);
        return view('posts.edit')->with('post', $post);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Posts::find($id);
        $post->delete();
        return 'post deleted';
        //return redirect('/posts')->with('success','Post removed');

    }
}
