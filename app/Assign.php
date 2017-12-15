<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assign extends Model
{

public function phone(){

	return $this->belongsTo('App\Phone');
}

public function person(){

	return $this->belongsTo('App\Person');
}

}
