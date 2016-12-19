<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public $table = 'users';
    protected  $primaryKey = 'id';


    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public  function tweets()
    {
        return $this->hasMany('App\Tweet');
    }
    public function followers()
    {
        return $this->belongsToMany('App\Follower','users_followers','user_id','follower_id');
    }
    public function followings()
    {
        return $this->belongsToMany('App\User','users_followings','user_id','following_id');
    }
}
