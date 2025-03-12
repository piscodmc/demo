<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Book;
use App\Models\Category;

class BookController extends Controller
{
    //
    function laythongtintheloai(){
        $the_loai_sach = Category::all();
        return view("qlsach.the_loai",compact("the_loai_sach"));
        }
    function laythongtinsach(){
        $sach = Book::where("nha_xuat_ban","Văn Học")->get();
        return view("qlsach.thong_tin_sach",compact("sach"));
    } 

    function nhaptheloai(){
        return view("qlsach.nhap_the_loai");
    } 
    function themtheloai(Request $request){
        $id = $request->input("id");
        $ten = $request->input("ten");
        $data = ["id"=>$id,"ten_the_loai"=>$ten];
        DB::table("the_loai")->insert($data);
        return "Thêm thành công.";
    } 
    function nhap2theloai(){
        return view("qlsach.nhap_2_the_loai");
    }
    /*
    function them2theloai(Request $request){
        $id1 = $request->input("id1");
        $ten1 = $request->input("ten1");
        $id2 = $request->input("id2");
        $ten2 = $request->input("ten2");
        $data = [
            ["id"=>$id1,"ten_the_loai"=>$ten1],
            ["id"=>$id2,"ten_the_loai"=>$ten2],
            ];
        DB::table("the_loai")->insert($data);
        return "Thêm thành công.";
    } 
*/
function them2theloai(Request $request){
    $id = $request->input("id");//["5,6"]
    $ten = $request->input("ten");

    $data=[];
    foreach($id as $key=>$value)
    {
        $data=["id"=>$value,"ten_the_loai"=>$ten[$key]];
        
    }
    DB::table("the_loai")->insert($data);
    return "Thêm thành công.";
}

}
