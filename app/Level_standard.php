<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// リレーション  一対多とか一対一とかのことだね

class Level_standard extends Model
{
    protected $fillable = ['level', 'standard', 'level_name'];

    public function behaviors()
    {
        return $this->hasMany('App\Behavior');
        // 一対多で、多側から一側に繋がる道の名前がhasMany

    }
    

}


