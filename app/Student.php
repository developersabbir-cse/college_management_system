<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['student_department','student_semester','student_name','father_name','mother_name','student_roll','student_reg','student_address','gender','religion','admission_date','student_image'];

    public static function saveStudent($request){
        $image = $request->file('student_image');
        $imageName = str_random('2').$image->getClientOriginalName();
        $directory = 'images/student-images';
        $image->move($directory,$imageName);

        $students = new Student();
        $students->student_department   = $request->student_department;
        $students->student_semester     = $request->student_semester;
        $students->student_name         = $request->student_name;
        $students->father_name          = $request->father_name;
        $students->mother_name          = $request->mother_name;
        $students->student_roll         = $request->student_roll;
        $students->student_reg          = $request->student_reg;
        $students->student_address      = $request->student_address;
        $students->gender               = $request->gender;
        $students->religion             = $request->religion;
        $students->admission_date       = $request->admission_date;
        $students->student_image        = $directory.'/'.$imageName;
        $students->save();
    }
}
