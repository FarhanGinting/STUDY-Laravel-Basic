<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use App\Models\Teacher;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index(){

        
       
        // 1️⃣ Layz Load 🐌
        // $class = ClassRoom::all(); // Cara Request Data => Hanya ketika dibutuhkan ambil data
        // Select * from table class
        // Select * from student where class = 1A
        // Select * from student where class = 1B
        // Select * from student where class = 1C
        // Select * from student where class = 1D


         // 2️⃣Eager Load 👑
         $class = ClassRoom::get(); // Cara Request Data => Mengikuti Kode yang diberikan
         // Select * from table class
         // Select * from student where class in (1A,1B,1C,1D)
        return view('classroom', ['classList' => $class]);
    }

    public function show($id){
        $class = ClassRoom::with(['students', 'homeroomTeacher'])
        ->findOrFail($id);
        return view('class-detail', ['class' => $class]);
    }

    public function create()
    {
        $teacher = Teacher::select('id', 'name')->get();
        return view('class-add', ['teacher' => $teacher]);
    }

    public function store(Request $request)
    {

        $class = ClassRoom::create($request->all());

        return redirect('/class');
    }

}
