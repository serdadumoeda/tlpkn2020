<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Eseloni;

class Eselonii extends Model
{
    protected $table='unit_eselon_ii';
    public function eseloni(){  
         return $this->belongsTo("App\Eseloni"); 
    }
}
