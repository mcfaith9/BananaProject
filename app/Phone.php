<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $fillable = ['phonemodel','phonebrand','phonenumber'];

    public function person(){
	return $this->belongsTo('App\Person');
}

}
