<?php

use App\Subject;
  
function getSqare($n){
	return $n * $n;
}

function getArray($str){
	return explode(",",$str);
}

function getSubjectTitleByid($id){
	return Subject::find($id)->title;
}