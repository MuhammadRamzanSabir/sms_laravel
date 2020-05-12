<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
class GroupController extends Controller
{
    public function index(){
   		$data = Group::all();
    	return view('group.group')->with('data', $data);
    }
    public function newForm(){
    	return view('group.group_new_form');
    }

     public function store(Request $request){
    	$newGroup = new Group();
    	$newGroup->group = $request->group;
    	$newGroup->save();
    	return redirect('/group');
    }
    public function editForm($id){
        $group = Group::find($id);
        return view('group.group_edit_form')->with('group',$group);
    }

    public function update(Request $request){
        $group = Group::find($request->id);
        $group->group = $request->group;
        $group->save();
        return redirect('/group');
    }

    public function delete($id){
        $group = Group::find($id);
        $group->delete();
        return redirect('/group');
    }
}
