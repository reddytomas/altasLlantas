<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
  public $table = "usuarios";
  public $timestamps = false;
  public $id = "id";
  public $guarded = [];
}
