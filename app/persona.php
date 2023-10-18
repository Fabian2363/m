<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    
    public $timestamps = false;	
        public $table = "persona"; 
         
    
        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        
         protected $fillable = [
            'id_persona ', 'documento','primero_apellido','segundo_apellido', 
        
        ];
}
