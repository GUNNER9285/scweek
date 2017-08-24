<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People_Poll extends Model
{
    protected $table = "people_poll";
    protected $fillable = [ 'id_people','id_poll' ];
    public $timestamps = true;
    
    public function choices()
    {
        return $this->belongsToMany('App\Choice','people_choice_poll', 
            'id_people_poll','id_choice');
    }
}
