<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follower extends Model
{
    public $table = 'users_followers';
    protected $primaryKey = 'id';
    protected $fillable = ['id','user_id','follower_id'];

    public function users()
    {
        return $this->belongsToMany('App\User','users_followers','user_id','follower_id');
    }
}
