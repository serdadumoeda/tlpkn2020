<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temuanbpk extends Model
{
    public function esii(){
        return $this->belongsTo("App\Eselonii");
   }
}
