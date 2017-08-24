<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    protected $table = "choice";
    protected $fillable = ['name'];
    public $timestamps = true;
    
    public function peoplepolls()
    {
        return $this->belongsToMany('App\People_Poll','people_choice_poll',
            'id_choice','id_people_poll');
    }
}
