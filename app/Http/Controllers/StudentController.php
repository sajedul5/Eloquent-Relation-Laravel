<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Phone;
use App\Models\Subject;

class StudentController extends Controller
{
    public function studentList()
    {
        $students = Student::whereBetween('id', [3,7])->orderBy('id','desc')->get();
        return $students;
    }

    // One to one relationship -data add
    public function addData()
    {
        $phone = new Phone();
        $phone->phone = '01517167619';

        $student = new Student();
        $student->name = 'SI-2';
        $student->email = 'si-2@gmail.com';
        $student->save();
        $student->phone()->save($phone);

        return 'Data Insert Successfully';
    }

    // One to one relationship -data featch
    public function fetchStudentData($id)
    {
        $phone = Student::find($id)->phone;
        return $phone;
    }

    // One to many relationship -data add

    public function addStudent()
    {
        $student = new Student();
        $student->name = 'Shakib';
        $student->email = 'shakib@gmail.com';
        $student->save();

        return 'Student Added Successfully!';
    }

    public function addSubject($id)
    {
        $student = Student::find($id);

        $subject = new Subject();
        $subject->subject = 'PHP';
        $student->subjects()->save($subject);

        return 'Subject Add Successfully';
    }


    public function getSubjectBystudentId($id)
    {
        $subject = Student::find($id)->subjects;
        return $subject;
    }


    //Many to Many relationship


}
