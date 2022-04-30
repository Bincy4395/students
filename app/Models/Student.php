<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $fillable = ['name', 'age', 'gender', 'reporting_teacher_id'];


    public function getStudents()
    {
        return Student::select('students.id','students.name','students.age','students.gender','teachers.name as reporting_teacher_id')
                    ->where('students.status', 1)
                    ->leftJoin('teachers', 'teachers.id', 'students.reporting_teacher_id')
                    ->get();
    }

    public function saveStudentsData($input)
    {
        $student = new Student();
        $student->name = $input['name'];
        $student->age = $input['age'];
        $student->gender = $input['gender'];
        $student->status = 1;
        $student->reporting_teacher_id = $input['reporting_teacher_id'];
        $student->save(); 
    }

    public function updateStudentsData($student_id, $input)
    {
        $student = Student::Find($student_id);
        $student->name = $input['name'];
        $student->age = $input['age'];
        $student->gender = $input['gender'];
        $student->status = 1;
        $student->reporting_teacher_id = $input['reporting_teacher_id'];
        $student->save(); 
    }

}
