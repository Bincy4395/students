<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Teacher;

class StudentsController extends Controller
{
    
    /**
     * To get Students details 
     *
     * @param Student $student
     * @return view
     */
    public function index(Student $student)
    {
        $students = $student->getStudents();
        return view('students/index', ['students' => $students]);
    }

    /**
     * To add a new student details
     *
     * @param Teacher $teacher
     * @return view
     */
    public function add(Teacher $teacher)
    {
        $teachers = $teacher->getTeachers();
        return view('students/add', [
            'teachers' => $teachers, 
            'student' => new Student()
        ]);
    }

    /**
     * To save student details
     *
     * @param Request $request
     * @param Student $student
     * @return view
     */
    public function save(Request $request, Student $student)
    {
        $student->saveStudentsData($request->all());
        return redirect()->route('students');
    }

    /**
     * To update existing record
     *
     * @param Request $request
     * @param int $student_id
     * @param Student $student
     * @return view
     */
    public function update(Request $request, $student_id, Student $student)
    {
        $student->updateStudentsData($student_id, $request->all());
        return redirect()->route('students');
    }

    /**
     * To edit existing record
     *
     * @param int $student_id
     * @param Teacher $teacher
     * @return void
     */
    public function edit($student_id, Teacher $teacher)
    {
        $student = Student::find($student_id);
        $teachers = $teacher->getTeachers();

        return view('students/add', [
            'teachers' => $teachers, 
            'student' => $student
        ]);
    }

    /**
     * To delete record
     *
     * @param int $student_id
     * @return void
     */
    public function delete($student_id)
    {
        Student::where('id', $student_id)->delete();
        return redirect()->route('students');
    }

}
