<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Family;
use App\Level;
use App\Group;
use App\Section;
use App\Subject;
use App\EnrollmentSubject;

class StudentController extends Controller
{
    public function index(){
   		$data = Student::with(['family','level','group','section','subject'])->get();
    	return view('student.student')->with('data', $data);
    }
    public function newForm(){
        $family = Family::all();
        $level = Level::all();
        $group = Group::all();
        $section = Section::all();
        $subject = Subject::all();
        return view('student.student_new_form')
                ->with('family',$family)
                ->with('level', $level)
                ->with('group', $group)
                ->with('section', $section)
                ->with('subject', $subject);
    }
     public function store(Request $request){
    	$newStudent = new Student();
    	$newStudent->name = $request->name;
    	$newStudent->dob = $request->dob;
    	$newStudent->family_id = $request->family_id;
        $newStudent->level_id = $request->level_id;
        $newStudent->group_id = $request->group_id;
        $newStudent->section_id = $request->section_id;
    	$newStudent->save();

        foreach ($request->subject_ids as $i => $v) {
            $enrollment = new EnrollmentSubject();
            $enrollment->student_id = $newStudent->id;
            $enrollment->subject_id = $v;
            $enrollment->save();
        }
    	return redirect('/student');
    }
    public function editForm($id){
        $student = Student::find($id);
        $family = Family::all();
        $level = Level::all();
        $group = Group::all();
        $section = Section::all();
        $subject = Subject::all();
        $enrollments = EnrollmentSubject::where('student_id', $id)->get(); 
        return view('student.student_edit_form')
                ->with('student',$student)
                ->with('family',$family)
                ->with('level',$level)
                ->with('group',$group)
                ->with('section',$section)
                ->with('subject',$subject)
                ->with('enrollments',$enrollments);
    }       
    public function update(Request $request){
        $student = Student::find($request->id);
        $student->name = $request->name;
        $student->dob = $request->dob;
        $student->family_id = $request->family_id;
        $student->level_id = $request->level_id;
        $student->group_id = $request->group_id;
        $student->section_id = $request->section_id;
        $student->save();

        EnrollmentSubject::where('student_id', $request->id)->delete();

        foreach ($request->subject_ids as $i => $v) {
            $enrollment = new EnrollmentSubject;
            $enrollment->student_id = $student->id;
            $enrollment->subject_id = $v;
            $enrollment->save();
        }
        return redirect('/student');

    }

    public function delete($id){
        $student = Student::find($id);
        $student->delete();
        return redirect('/student');
    }
}
