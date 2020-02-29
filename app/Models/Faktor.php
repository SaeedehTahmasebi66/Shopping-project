<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faktor extends Model
{
    public function Users(){
        return $this->belongsTo('App\Models\Users');
    }

    public function Useraddress(){
        return $this->belongsTo('App\Models\Useraddress');
    }

    public function Payment(){
        return $this->hasMany('App\Models\Payment');
    }

    public function Product(){
        return $this->belongsToMany('App\Models\Product');
    }

}
