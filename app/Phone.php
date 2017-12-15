<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $fillable = ['phonemodel','phonebrand','phonenumber'];

    public function person(){
	return $this->hasMany('App\Assign', 'phone_id');
}

}
