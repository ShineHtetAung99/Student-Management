<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
        $students = Student::paginate(5);
        return view('welcome', compact('students'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $this->validate($request,[
        'name' => 'required',
        'phone' => 'required',
        'address' => 'required',
        'email' => 'required',
        ]);

        $student = new Student;
            $student->name = $request->name;
            $student->phone = $request->phone;
            $student->address = $request->address;
            $student->email = $request->email;
            $student->save();

            return redirect(route('home'))->with('successMsg', 'Student Successfully Added');
    }

    public function edit($id){
        $student = Student::find($id);
        return view('edit', compact('student'));
    }

    public function update(Request $request, $id){
        $this->validate($request,[
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'email' => 'required',
            ]);
    
            $student = Student::find($id);
                $student->name = $request->name;
                $student->phone = $request->phone;
                $student->address = $request->address;
                $student->email = $request->email;
                $student->save();
    
                return redirect(route('home'))->with('successMsg', 'Student Successfully Updated');
    }

    public function delete($id){
        Student::find($id)->delete();
        return redirect(route('home'))->with('successMsg', 'Student Delete Successfully');

    }
}
