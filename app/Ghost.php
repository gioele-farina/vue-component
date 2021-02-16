<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ghost extends Model
{
  protected $fillable = [
    'color',
  ];

  public function color() {
    return $this -> belongsTo(Color::class);
  }
}
