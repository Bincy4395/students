<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class StudentsMark extends Model
{
    use HasFactory;

    public function getStudentsMarks()
    {
        return StudentsMark::select('students_marks.*','students.name as student_name')
                    ->leftJoin('students', 'students.id', 'students_marks.student_id')
                    ->get();
    }

    public function saveStudentsMarks($input)
    {
        $studentsMarks = new StudentsMark();
        $studentsMarks->student_id = $input['student_id'];
        $studentsMarks->term = $input['term'];
        $studentsMarks->maths_marks = $input['maths_marks'];
        $studentsMarks->science_marks = $input['science_marks'];
        $studentsMarks->history_marks = $input['history_marks'];
        $studentsMarks->total_marks = $input['maths_marks'] + $input['science_marks'] + $input['history_marks'];
        $studentsMarks->save(); 
    }

    public function updateStudentsMarks($id, $input)
    {
        $studentsMarks = StudentsMark::Find($id);
        $studentsMarks->student_id = $input['student_id'];
        $studentsMarks->term = $input['term'];
        $studentsMarks->maths_marks = $input['maths_marks'];
        $studentsMarks->science_marks = $input['science_marks'];
        $studentsMarks->history_marks = $input['history_marks'];
        $studentsMarks->total_marks = $input['maths_marks'] + $input['science_marks'] + $input['history_marks'];
        $studentsMarks->save(); 
    }
}
