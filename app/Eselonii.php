<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Eselonii extends Model
{
    protected $table='unit_eselon_ii';
    public function esi(){
         return $this->belongsTo("App\Eseloni");
    }

    public function temuanbpk(){
        return $this->hasMany("App\Temuanbpk");
    }
}
