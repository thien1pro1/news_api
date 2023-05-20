<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\CategoryPost;
use Illuminate\Http\Request;

use Storage;
use File;

class CategoryPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       $category = CategoryPost::all();
        return view('layouts.category.index')->with(compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         
        return view('layouts.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $category = new CategoryPost();
        $category->title = $request->title;
         $category->short_desc = $request->short_desc;
        $category->save();
        return redirect()->route('category.index')->with('success','Thêm danh mục thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $Post
     * @return \Illuminate\Http\Response
     */
    public function show( $categoryPost)
    {
        //

       

        $category = CategoryPost::find($categoryPost);
        return view('layouts.category.show')->with(compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $Post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $categoryPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $Post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $categoryPost)
    {
        //
        $data = $request->all();
        $category = CategoryPost::find($categoryPost);
        $category->title = $data['title'];
         $category->short_desc = $request->short_desc;
        $category->save();


        return redirect()->route('category.index')->with('success','Cập nhật danh mục thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $Post
     * @return \Illuminate\Http\Response
     */
    public function destroy( $categoryPost)
    {
        //

        

         $category = CategoryPost::find($categoryPost);
         

        $category->delete();
        return redirect()->back();
    }
}
