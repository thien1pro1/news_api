<?php

namespace App\Http\Controllers;

use App\Http\Constants\Status;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;
use App\Models\Post;

use App\Models\Category;
use Illuminate\Support\Facades\Auth;

// use Storage;
// use File;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::get();
        $categories = Category::all();
        return view('admin.post.index')->with(compact('posts','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $user = Auth::user();
        $categories = Category::all();
        return view('admin.post.create')->with(compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'content' => 'required|max:255',
            'category_id' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif'
        ]);
        $post = new Post();
        $post->name = $request->name;
        $post->views = 0;
        $post->description = $request->description;
        $post->content = $request->content;
        $post->category_id = $request->category_id;
        $post->user_id = Auth::user()->id;
        if($request['image']){
            $image = $request['image'];
            $ext = $image->getClientOriginalExtension();

            $name = time().'_'.$image->getClientOriginalName();
            Storage::disk('public')->put($name,File::get($image));
            $post->image = $name;

        }else{
            $post->image = 'default.jpg';
        }
        $post->save();
        return redirect()->back()->with('status','Th??m b??i vi???t th??nh c??ng');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        $category = Category::all();
        return view('admin.post.create')->with(compact('category','post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Post::find($id);
        $categories = Category::where('status', Status::$ACTIVE)->get();
        return view('admin.post.edit', ['categories' => $categories, 'post' => $edit]);
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
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'content' => 'required|max:255',
            'category_id' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif'
        ]);
        $data = $request->all();
        $post = Post::find($id);
        $post->name = $data['name'];
        $post->description = $data['description'];
        $post->content = $data['content'];
        $post->status = 1;

        if($request['image']){
            Storage::delete('public/'.$post->image);
            $image = $request['image'];
            $ext = $image->getClientOriginalExtension();

            $name = time().'_'.$image->getClientOriginalName();
            Storage::disk('public')->put($name,File::get($image));
            $post->image = $name;

        }
        $post->category_id = $request->category_id;

        $post->save();
        return redirect()->back()->with('status','C???p nh???p b??i vi???t th??nh c??ng');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::find($id)->delete();
        return redirect()->back()->with('status','Xo?? B??i vi???t th??nh c??ng');
    }

    public function comeback(){
        return redirect('/admin/post');

    }
}
