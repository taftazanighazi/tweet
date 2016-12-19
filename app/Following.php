<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Following extends Model
{
    public $table = 'users_followings';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id'];

    public function users()
    {
        return $this->belongsToMany('App\User','users_followings','user_id','following_id');// argument 1 method, argument 2 tabel yang dijoinkan, foreign key yang didefinisikan relasinya, foreign key yang dijoinkan
    }
}
