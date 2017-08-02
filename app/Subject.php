<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'subjects';
    

    public function sector(){
        return $this->belongsTo('App\Sector');
    }
    
    public function rounds(){
		return $this->belongsToMany('App\Round', 'tracks')
			->withTimestamps();
    }

}
