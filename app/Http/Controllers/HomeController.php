<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryPost;
use App\Models\Post;
use DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function timkiem(){
        $keywords = $_GET['keywords'];
        $category_post = Post::with('category')->where('title','LIKE','%'.$keywords.'%')->orwhere('short_desc','LIKE','%'.$keywords.'%')->get();

        $category = CategoryPost::all();
    
        return view('pages.timkiem')->with(compact('category','category_post','keywords'));
    } 


    public function index()
    {
        $all_post = Post::all();

        $all_post2 = Post::orderBy('created_at','DESC')->limit(8)->get();
        $views_post = Post::orderBy('views','DESC')->limit(2)->get();

        $show_cate = CategoryPost::orderBy(DB::raw('RAND()'))->limit(3)->get();

        $show_cate2 = CategoryPost::orderBy(DB::raw('RAND()'))->limit(4)->get();

        $new_post = Post::orderBy(DB::raw('RAND()'))->limit(4)->get();
        $new2_post = Post::orderBy(DB::raw('RAND()'))->limit(2)->get();

        $news_post = Post::orderBy(DB::raw('RAND()'))->limit(3)->get();
        $news_post2 = Post::orderBy(DB::raw('RAND()'))->limit(6)->get();

        $category = CategoryPost::all();
        return view('pages.main')->with(compact('category','all_post','new_post','views_post','all_post2','show_cate','new2_post','news_post','show_cate2','news_post2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
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
        //
    }
}
