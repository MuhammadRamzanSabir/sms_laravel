<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
class SubjectController extends Controller
{
    public function index(){
   		$data = Subject::all();
    	return view('subject.subject')->with('data', $data);
    }
    public function newForm(){
    	return view('subject.subject_new_form');
    }

    public function store(Request $request){
    	$newSubject = new Subject();
    	$newSubject->title = $request->title;
    	$newSubject->save();
    	return redirect('/subject');
    }
    public function editForm($id){
        $subject = Subject::find($id);
        return view('subject.subject_edit_form')->with('subject',$subject);
    }

    public function update(Request $request){
        $subject = Subject::find($request->id);
        $subject->title = $request->title;
        $subject->save();
        return redirect('/subject');
    }

    public function delete($id){
        $subject = Subject::find($id);
        $subject->delete();
        return redirect('/subject');
    }
}
