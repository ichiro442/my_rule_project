<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// リレーション  一対多とか一対一とかのことだね

class Goal extends Model
{
    protected $fillable = ['goal', 'user_id', 'experience_point','time_limit', 'reward'];

    public function behaviors()
    {
        return $this->hasMany('App\Behavior');
    }
    public function users(){
        return $this->belongsTo('App\User'); 
        // 一対多で、多側から一側に繋がる道の名前がbelongsTo
    }
}
