<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People_Room extends Model
{
    protected $table = "people_room";
    protected $fillable = [ 'id_people','id_room' ];
    public $timestamps = true;
}
