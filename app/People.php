<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $table = "people";
    protected $fillable = [ 'firstname','lastname','gender','age', 'class', 'job',
        'status', 'count' ];
    public $timestamps = true;

    public function rooms()
    {
        return $this->belongsToMany('App\Room','people_room', 'id_people','id_room');
    }

    public function schools()
    {
        return $this->hasOne('App\School','id_people');
    }

    public function polls()
    {
        return $this->hasOne('App\Poll','id_people');
    }
}
