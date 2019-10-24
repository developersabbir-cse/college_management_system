<?php

namespace App\Http\Controllers;

use App\Department;
use App\Student;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class StudentController extends Controller
{
    public function addStudent(){
        return view('admin.student.add-student',[
            'departments'   =>Department::all()
        ]);
    }
    public function newStudent(Request $request){
            Student::saveStudent($request);
            return redirect('student/add-student')->with('message',' ');
    }
    public function rollCheck($roll){
        $student=Student::where('student_roll',$roll)->first();
        if($student){
            echo('Exist');
        }
        else{
            echo('Available');

        }
    }
    public function manageStudent(){
        return view('admin.student.manage-student',[
            'students'  =>Student::all(),
            'departments' =>Department::all(),
            'computers'     =>Student::where('student_department','computer')->get()

        ]);


    }

    public function studentInfo($id){
        return view('admin.student.student-info',[
            'students'  =>Student::where('id',$id)->get()
        ]);
    }

    public function departmentCheck(){
        $students=Student::where('student_department','computer')->get();

    }
    public function addDepartment(){

        return view('admin.department.add-department');


    }
    public function newDepartment(Request $request){
        Department::saveDepartment($request);
        return redirect('add-department')->with('message',' ');
    }
}
