<?php

namespace App;

use Illuminate\database\eloquent\Model;

class Laravel extends Model

{
  


    protected $table = 'laravel';

    public $fillable = ['name', 'is_done'];


}