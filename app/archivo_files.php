<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class archivo_files extends Model
{
    protected $fillable = [
        'thesis_id',
        'url',
        'name',
        'state'
    ];
	
	 public $timestamps = false;	
        public $table = "archivo_files"; 
         
    
        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        
}
