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
}
