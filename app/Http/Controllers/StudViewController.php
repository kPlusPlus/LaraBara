<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class StudViewController extends Controller
{
    public function index(){
        //$users = DB::table("student")->get();
        $users = \App\Student::all();
        return view('stud_view',['users'=>$users]);
    }
}
