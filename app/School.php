<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $table = "room";
    protected $fillable = ['name, id_people'];
    public $timestamps = true;


}
