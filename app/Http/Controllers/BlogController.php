<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //We get all the data from our blog from ::all() 
        $blogs = Blog::all();

        //The site get send with the data 'blogs' that contains the data you can call out in the view
        return view('blogs.index', compact('blogs'));
    }   

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {  
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Blog::create($validated);

        return redirect()->route('blogs.index')->with('Sucess', 'Blog created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //returns en error if it dosent exist within the database
        $blog = Blog::findOrFail($id);
        return view('blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $blog = Blog::findOrFail($id); //finds the element and then after adds use update
        $blog -> update($validated);

        return redirect()->route('blogs.index')->with('Success', 'Blog updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog -> delete();

        return redirect()->route('blogs.index')->with('Success', 'Blog deleted succesfully');
    }
}
