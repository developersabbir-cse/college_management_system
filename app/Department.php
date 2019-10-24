<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = ['department'];
    public static function saveDepartment($request){
        $department = new Department();
        $department->department   = $request->department;
        $department->save();
    }
}
