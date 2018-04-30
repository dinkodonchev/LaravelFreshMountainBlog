<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    public function offer(){

    	return $this->belongsToMany('App\Joboffer');
    	
    }
}
