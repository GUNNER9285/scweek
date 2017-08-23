<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    protected $table = "choice";
    protected $fillable = ['name'];
    public $timestamps = true;
}
