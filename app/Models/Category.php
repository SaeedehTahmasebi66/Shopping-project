<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function Product(){
        return $this->hasMany('App\Models\Product');
    }
}
