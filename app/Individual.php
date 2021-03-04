<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Individual extends Model
{
    public function transactions(){
        return $this->hasMany('App\Transaction','individual_id');
    }

    public function sacco(){
        return $this->belongsTo('App\Sacco', 'sacco_id');
    }
}
