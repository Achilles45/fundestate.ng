<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        //Return index page of blogs
        $blogs = Blog::orderBy('id', 'desc')->paginate(6);
        return view('blogs.index')->with('blogs', $blogs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Creating a new blog post
        return view('blogs.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Store a new blog post created
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'body' => 'required'
        ]);
        $blog = new Blog;
        $blog->title = $request->input('title');
        $blog->description = $request->input('description');
        $blog->body = $request->input('body');
        $blog->save();
        return redirect('/blogs')->with('success', 'Post successfully created');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Show a particular blog post
        $blog = Blog::find($id);
        return view('blogs.show')->with('blog', $blog);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Return view to enable edit view
        $blog = Blog::find($id);
        return view('blogs.edit')->with('blog', $blog);
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
        //Update blo post
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'body' => 'required'
        ]);
        $blog = Blog::find($id);
        $blog->title = $request->input('title');
        $blog->description = $request->input('description');
        $blog->body = $request->input('body');
        $blog->save();
        return redirect('/blogs')->with('success', 'Blog successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Delete a blog post
        $blog = Blog::find($id);
        $blog->delete();
        return redirect('/blogs')->with('success', 'Blog post deleted!');
    }
}
