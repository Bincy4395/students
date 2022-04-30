<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\StudentsMark;

class StudentsMarkController extends Controller
{
    
    /**
     * To get Students mark details 
     *
     * @param StudentsMark $studentsMarks
     * @return array
     */
    public function index(StudentsMark $studentsMarks)
    {
        $studentsMarks = $studentsMarks->getStudentsMarks();
        return view('marks/index', ['studentsMarks' => $studentsMarks]);
    }

    /**
     * To add a new student mark details
     *
     * @param Student $student
     * @return view
     */
    public function add(Student $student)
    {
        $students = $student->getStudents();

        return view('marks/add_mark', [
            'students' => $students, 
            'studentsMark' => new StudentsMark()
        ]);
    }

    /**
     * To save student mark details
     *
     * @param Request $request
     * @param StudentsMark $studentsMark
     * @return view
     */
    public function save(Request $request, StudentsMark $studentsMark)
    {
        $studentsMark->saveStudentsMarks($request->all());
        return redirect()->route('students/marks');
    }

    /**
     * To edit existing record
     *
     * @param int $id
     * @param Student $student
     * @return view
     */
    public function edit($id, Student $student)
    {
        $studentsMark = StudentsMark::find($id);
        $students = $student->getStudents();

        return view('marks/add_mark', [
            'students' => $students, 
            'studentsMark' => $studentsMark
        ]);
    }

    /**
     * To update existing record
     *
     * @param Request $request
     * @param int $student_mark_id
     * @param StudentsMark $studentsMark
     * @return view
     */
    public function update(Request $request, $student_mark_id, StudentsMark $studentsMark)
    {
        $studentsMark->updateStudentsMarks($student_mark_id, $request->all());
        return redirect()->route('students/marks');
    }

    /**
     * To delete record
     *
     * @param int $id
     * @return view
     */
    public function delete($id)
    {
        StudentsMark::where('id', $id)->delete();
        return redirect()->route('students/marks');
    }
}
