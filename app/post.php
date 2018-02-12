<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
        
    protected $primaryKey = 'idPosts';
   
    protected $fillable = 
    ['Content' , 'Owner_id' ,'Parent_id'];

    //protected $guard =['*'];
    public function subscriber ()
    {
      return $this->belongsTo('App\subscriber');
    }
    
    public function post ()
    {
      return $this->belongsTo('App\post');
    }
    
}

