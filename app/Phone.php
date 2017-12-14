<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $fillable = ['phonemodel','phonebrand','phonenumber'];
    protected $primaryKey = 'phone_id';

    public function person(){
	return $this->belongsTo('App\Person', 'id');
}

}
