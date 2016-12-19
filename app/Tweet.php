<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    public $table = 'tweets';
    protected $primaryKey = 'id';
    protected $fillable = ['id','isi','user_id'];

    public function user()
    {
     return $this->belongsTo('App\User');
    }
}
