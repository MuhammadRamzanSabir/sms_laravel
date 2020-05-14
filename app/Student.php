<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function family()
    {
        return $this->belongsTo('App\Family', 'family_id');
    }
    public function level()
    {
        return $this->belongsTo('App\Level', 'level_id');
    }
    public function group()
    {
        return $this->belongsTo('App\Group', 'group_id');
    }
    public function section()
    {
        return $this->belongsTo('App\Section', 'section_id');
    }
    public function subject()
    {
        return $this->belongsTo('App\Subject', 'subject_id');
    }
}
