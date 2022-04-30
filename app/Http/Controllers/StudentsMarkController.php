<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\StudentsMark;

class StudentsMarkController extends Controller
{
    public function index(StudentsMark $studentsMarks)
    {
        $studentsMarks = $studentsMarks->getStudentsMarks();
        return view('marks/index', ['studentsMarks' => $studentsMarks]);
    }

    public function add(Student $student)
    {
        $students = $student->getStudents();

        return view('marks/add_mark', [
            'students' => $students, 
            'studentsMark' => new StudentsMark()
        ]);
    }

    public function save(Request $request, StudentsMark $studentsMark)
    {
        $studentsMark->saveStudentsMarks($request->all());
        return redirect()->route('students/marks');
    }

    public function edit($id, Student $student)
    {
        $studentsMark = StudentsMark::find($id);
        $students = $student->getStudents();

        return view('marks/add_mark', [
            'students' => $students, 
            'studentsMark' => $studentsMark
        ]);
    }

    public function update(Request $request, $student_mark_id, StudentsMark $studentsMark)
    {
        $studentsMark->updateStudentsMarks($student_mark_id, $request->all());
        return redirect()->route('students/marks');
    }

    public function delete($id)
    {
        StudentsMark::where('id', $id)->delete();
        return redirect()->route('students/marks');
    }
}
