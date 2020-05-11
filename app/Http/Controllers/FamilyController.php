<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Family;
class FamilyController extends Controller
{
    public function index(){
   		$data = Family::all();
    	return view('family.family')->with('data', $data);
    }
    public function newForm(){
    	return view('family.family_new_form');
    }

     public function store(Request $request){
    	$newFamily = new Family();
    	$newFamily->father_name = $request->father_name;
    	$newFamily->address = $request->address;
    	$newFamily->mobile = $request->mobile;
    	$newFamily->save();
    	return redirect('/family');
    }
    public function editForm($id){
        $family = Family::find($id);
        return view('family.family_edit_form')->with('family',$family);
    }

    public function update(Request $request){
        $family = Family::find($request->id);
        $family->father_name = $request->father_name;
        $family->address = $request->address;
        $family->mobile = $request->mobile;
        $family->save();
        return redirect('/family');
    }

    public function delete($id){
        $family = Family::find($id);
        $family->delete();
        return redirect('/family');
    }
}
