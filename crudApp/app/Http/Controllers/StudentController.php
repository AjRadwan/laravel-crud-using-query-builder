<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $student = DB::table('student')->get();
        return view('index', ['students' => $student]);
    }

    public function create(Request $request){
        DB::table('student')->insert([
            'name' => $request->name,
            'roll' => $request->roll,
            'address' => $request->address,        
        ]);
        return redirect(route('index'))->with('msg', 'Student Addedd Successfully!!');

    }

    public function show(){
        return view('addStudent');
    }


    public function edit($id){
       $student = DB::get('student')->find($id);
       return view('editStudent', ['student' => $student]);
    }
}
