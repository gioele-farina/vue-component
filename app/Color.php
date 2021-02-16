<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    public function ghosts(){
      return $this -> hasMany(Ghost::class);
    }
}
