<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return view('index');
    }

    public function create(Request $request){
        DB::table('student')->insert([
            'name' => $request->name,
              'city' => $request->city,
              'address' => $request->address,
        ]);

    }

    public function show(){
        return view('addStudent');
    }
}
