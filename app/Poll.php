<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    protected $table = "poll";
    protected $fillable = ['name'];
    public $timestamps = true;
}
