<?php

namespace App;

use App\Eselonii;
use Illuminate\Database\Eloquent\Model;

class Eseloni extends Model
{
    protected $table='unit_eselon_i';
    public function handphones(){   
        return $this->hasMany("App\Eselonii"); 
    }
}
