<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // public function grade()
    // {
    // return $this->belongsTo('App\Grade', 'grade_id', 'id');
    // }

    public function studentGrades()
    {
        return $this->hasMany('App\Grade', 'student_id', 'id');
    }

    public function studentLecture()
    {
        return $this->hasMany('App\Lecture', 'student_id', 'id');
    }

}
