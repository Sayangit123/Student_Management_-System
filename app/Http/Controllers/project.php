<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class project extends Controller
{

    //web page controller

    public function home(){
        return view('home');
    }
    public function placements(){
        $row=DB::table('placements')->get();
        $row1=DB::table('hiring_companies')->get();
       // dd($row1);

        //return view('placements')->with(['msg'=>$row]);
        return view('placements', compact('row', 'row1'));
    
   }


    public function course(){
        $row=DB::table('courses')->get();
        return view('courses')->with('msg', $row);
    }
   
    public function Instructors(){
        $row=DB::table('Instructors')->get();
        //dd($row);
        return view('Instructors')->with(['msg'=>$row]);
    }

    public function about(){
     
        return view('about');

    }


    public function show1($userid){
        $rows=DB::table('courses')->where('id',$userid)->get();
       return view('view')->with(['msg'=>$rows[0]]);

    }

    public function privacy(){
        return view('privacy');

    }
    
    public function terms(){
        return view('terms');

    }

   

}
