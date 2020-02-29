<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    public $timestamps = false;

    public function Gender(){
        return $this->belongsTo('App\Models\Gender');
    }

    public function Useraddress(){
        return $this->hasMany('App\Models\Useraddress');
    }

    public function Faktor(){
        return $this->hasMany('App\Models\Faktor');
    }

    public function Product(){
        return $this->belongsToMany('App\Models\Product');
    }

    public function Type(){
        return $this->belongsToMany('App\Models\Type');
    }


}
