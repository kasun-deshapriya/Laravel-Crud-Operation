<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentContrer extends Controller
{
    public function index(){
        $student = student::all();

        return view("welcom",["student"=>$student]);
    }
}