<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = "room";
    protected $fillable = ['name'];
    public $timestamps = true;

    public function peoples()
    {
        return $this->belongsToMany('App\People','people_room', 'id_room','id_people');
    }
}
