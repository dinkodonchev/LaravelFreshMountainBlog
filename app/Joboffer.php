<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Joboffer extends Model
{
    public function candidate(){

    	return $this->belongsToMany('App\Candidates');
    	
    }
}
