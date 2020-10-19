<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level_standard extends Model
{
    protected $fillable = ['level', 'standard', 'level_name'];

    public function behaviors()
    {
        return $this->hasMany('App\Behavior');
    }
    

}


