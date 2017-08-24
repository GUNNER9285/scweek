<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People_Choice_Poll extends Model
{
    protected $table = "people_choice_poll";
    protected $fillable = [ 'id_choice','id_people_poll' ];
    public $timestamps = true;
    public function rooms()
    {
        return $this->belongsToMany('App\Room','people_room', 'id_people','id_room');
    }
}
