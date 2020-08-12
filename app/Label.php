<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    protected $fillable = ['name'];

    public function shows(){
        return $this->hasMany('App\Label');
    }
}
