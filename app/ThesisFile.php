<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class ThesisFile extends Model
{
    

    protected $fillable = [
        'thesis_id',
        'url',
        'name',
        'state'
    ];
	
	 public $timestamps = false;	
        public $table = "thesis_files"; 
         
    
        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        
         
}
