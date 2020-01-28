<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function Users(){
        return $this->belongsToMany('App\Models\Users');
    }
}
