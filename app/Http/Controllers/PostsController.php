<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBlogPost;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

//        $posts = Post::all();
//        $post = Post::first();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogPost $request)
    {

        $input = $request->all();
        if($file = $request->file('fileToUpload')){
            $name = $file->getClientOriginalName();
            $file->move('images', $name);
            $input['post_photo'] = $name;
        }

        Post::create($input);
        return redirect('/thank');

//        $validated = $request->validated();
//        $validatedData = $request->validate([
//            'title' => 'required',
//            'body' => 'required',
//                                            ]);
//       $posts = new Post;
//        $posts->title = $request->title;
//        $posts->body = $request->body;
//        $posts->is_admin = $request->is_admin;
//        $posts->post_photo = $request->file('fileToUpload');
//        $posts->save();
//
//        return redirect('/thank');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        {
            $post = Post::findOrFail($id);
            return view('posts.edit', compact('post'));

        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->is_admin = $request->is_admin;
        $post->save();
        return view('posts.show', compact('post'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showContactView()
    {
        $people = ['gil', 'may'];
        return view('contact', compact('people'));
    }

//    public function showPost($id, $name, $pass)
//    {
//        //return view('post')->with('id', $id);
//        return view('post', compact('id', 'name', 'pass'));
//    }
}




