<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sacco extends Model
{
    public function individuals(){
        return $this->hasMany('App\Individual','sacco_id');
    }
}
