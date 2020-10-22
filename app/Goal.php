<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    protected $fillable = ['goal', 'user_id', 'experience_point','time_limit', 'reward'];

    public function behaviors()
    {
        return $this->hasMany('App\Behavior');
    }
    public function users(){
        return $this->belongsTo('App\User');
    }
}
