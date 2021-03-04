<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public function individual(){
        return $this->belongsTo('App\Individual','individual_id');
    }
}
