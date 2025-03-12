<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViduLayoutController extends Controller
 {
 function trang1()
 {
 return view("vidulayout.trang1");
 }
 function sach()
 {
 $data = DB::select("select * from sach order by gia_ban asc limit 2,8");
 return view("vidusach.index", compact("data"));
 }
 function theloai($id)
 {
 $data = DB::select("select * from sach where id_the_loai = ?",[$id]);
 return view("vidusach.index", compact("data"));
 }

 function chitiet($id)
    {
    $sach = DB::select("select * from sach where id = ?",[$id]);
    return view("vidusach.chitiet", compact("sach")); //["sach" => $sach[0]] nếu dùng cái này thì ko cần dùng foreach bên view
        
        
    }
 }