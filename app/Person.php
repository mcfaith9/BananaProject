<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = ['fname','lname', 'address', 'phone_id'];

    public function phone(){
	return $this->hasMany('App\Phone', 'person_id');
}
    
}
