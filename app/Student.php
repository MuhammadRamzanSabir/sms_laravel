<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function family()
    {
        return $this->belongsTo('App\Family', 'family_id');
    }
}
