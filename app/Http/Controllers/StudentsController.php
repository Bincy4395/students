<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Teacher;

class StudentsController extends Controller
{
    
    public function index(Student $student)
    {
        $students = $student->getStudents();
        return view('students/index', ['students' => $students]);
    }

    public function add(Teacher $teacher)
    {
        $teachers = $teacher->getTeachers();
        return view('students/add', [
            'teachers' => $teachers, 
            'student' => new Student()
        ]);
    }

    public function save(Request $request, Student $student)
    {
        $student->saveStudentsData($request->all());
        return redirect()->route('students');
    }

    public function update(Request $request, $student_id, Student $student)
    {
        $student->updateStudentsData($student_id, $request->all());
        return redirect()->route('students');
    }

    public function edit($student_id, Teacher $teacher)
    {
        $student = Student::find($student_id);
        $teachers = $teacher->getTeachers();

        return view('students/add', [
            'teachers' => $teachers, 
            'student' => $student
        ]);
    }

    public function delete($student_id)
    {
        Student::where('id', $student_id)->delete();
        return redirect()->route('students');
    }

}
