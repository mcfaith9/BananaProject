<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = ['fname','lname', 'address', 'phonemodel','phonebrand'];

    public function phone(){
	return $this->hasMany('App\Phone', 'phone_id');
}
    
}
