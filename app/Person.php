<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
	//'phonemodel','phonebrand'
    protected $fillable = ['fname','lname', 'address'];

    public function phone(){
	return $this->hasMany('App\Phone', 'phone_id');
}

}
