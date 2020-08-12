<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    protected $fillable = ['name','description','start_date','end_date','label_id'];

    public function label(){
        return $this->belongsTo('App\Label');
    }
}
