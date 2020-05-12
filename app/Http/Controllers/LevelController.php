<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Level;
class LevelController extends Controller
{
    public function index(){
   		$data = Level::all();
    	return view('level.level')->with('data', $data);
    }
    public function newForm(){
    	return view('level.level_new_form');
    }

     public function store(Request $request){
    	$newLevel = new Level();
    	$newLevel->level = $request->level;
    	$newLevel->save();
    	return redirect('/level');
    }
    public function editForm($id){
        $level = Level::find($id);
        return view('level.level_edit_form')->with('level',$level);
    }

    public function update(Request $request){
        $level = Level::find($request->id);
        $level->level = $request->level;
        $level->save();
        return redirect('/level');
    }

    public function delete($id){
        $level = Level::find($id);
        $level->delete();
        return redirect('/level');
    }
}
