<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subscriber extends Model
{
    //
    protected $primarykey = "idSubscribers";
    protected $fillable= ['Name' ,'PhoneNumber','Gender','BirthDate'];

    public function posts (){
      return $this->hasMany('App\post');
    }

    public function user()
    {
        return $this->hasOne('App\User');
    }
}
