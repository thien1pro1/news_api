<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view("admin.categories.index", ['categories' => $categories]);
    }

    public function destroy($category){
        $isDelSuccess = Category::destroy($category);

        if($isDelSuccess > 0){
            Session::flash('msg','Xóa danh mục thành công');
            return redirect()->back();
        }
        Session::flash('msg','Không tìm thấy danh mục cần xóa');
        return  redirect()->back();
    }

    public function create(){
        return view("admin.categories.create");
    }

    public function edit($categoryId){
        $category = Category::where('id', $categoryId)->first();
        if(isset($category)){
            return view("admin.categories.edit", ['category'=> $category]);
        }

        return redirect()->route("admin.notFound");

    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'status' => 'required|max:255',
        ]);
        $category = $request->all();

        $newCat = new Category($category);
        $newCat->save();

        Session::flash('msg','Thêm mới danh mục thành công');
        return view("admin.categories.create");
    }

    public function update(Request $request, $categoryId){
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'status' => 'required|max:255',
        ]);

        $category = Category::where('id', $categoryId)->first();
        if(isset($category)){
            $category->update($request->all());
            Session::flash('msg','Cập nhật danh mục thành công');
            return redirect()->back();
        }
        return redirect()->back();
    }
}
