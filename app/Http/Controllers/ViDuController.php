<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViDuController extends Controller
{
    //
    function vidu1(){
       
        $name = "ĐHNH";
        $name2 = "HUB";
        return view('vidu1',compact("name"));
        }

     function vidu1a(){
        return 'Hello 1a';
         }

         function theloai($id)
 {
 $data = DB::select("select * from sach where the_loai = ?",[$id]);
 return view("vidusach.index", compact("data"));
 }
}
