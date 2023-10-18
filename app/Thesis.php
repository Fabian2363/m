<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Thesis extends Model
{
   

    protected $fillable = [
        'thesis_code',
        'title',
        'state'
    ];
	
	 public $timestamps = false;	
        public $table = "theses"; 
         
    
        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        
         
}
