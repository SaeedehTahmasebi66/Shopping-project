<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;

    public function Categoy(){
        return $this->belongsTo('App\Models\Category');
    }

    public function Discount(){
        return $this->belongsTo('App\Models\Discount');
    }

    public function Image(){
        return $this->hasMany('App\Models\Image');
    }

    public function Users(){
        return $this->belongsToMany('App\Models\Users');
    }

    public function Faktor(){
        return $this->belongsToMany('App\Models\Faktor');
    }

    protected $fillable = ['title' , 'content'];

    public function Photos(){
        return $this->morphMany('App\Models\Photos', 'imageable');
    }
}
