<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class archivo extends Model
{
    protected $fillable = [
        'thesis_code',
        'title',
        'state'
    ];
	
	 public $timestamps = false;	
        public $table = "archivo"; 
         
    
        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
}
