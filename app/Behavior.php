<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Behavior extends Model
{
    protected $fillable = ['goal_id', 'task', 'reward', 'experience_point', 'time_limit', 'choice', 'display_order'];

    public function goal()
    {
        return $this->belongsTo('App\Goal');
        // 一対多で、多側から一側に繋がる道の名前がbelongsTo

    }
}
