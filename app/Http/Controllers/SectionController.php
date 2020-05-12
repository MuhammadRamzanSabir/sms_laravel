<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Section;
class SectionController extends Controller
{
    public function index(){
   		$data = Section::all();
    	return view('section.section')->with('data', $data);
    }
    public function newForm(){
    	return view('section.section_new_form');
    }

    public function store(Request $request){
    	$newSection = new Section();
    	$newSection->section = $request->section;
    	$newSection->save();
    	return redirect('/section');
    }
    public function editForm($id){
        $section = Section::find($id);
        return view('section.section_edit_form')->with('section',$section);
    }

    public function update(Request $request){
        $section = Section::find($request->id);
        $section->section = $request->section;
        $section->save();
        return redirect('/section');
    }

    public function delete($id){
        $section = Section::find($id);
        $section->delete();
        return redirect('/section');
    }
}
