<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temuanitjen extends Model
{
    protected $table = 'temuan_itjens';
    public function esii(){
        return $this->belongsTo("App\Eselonii");
   }
}
