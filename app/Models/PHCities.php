<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PHCities extends PHBaseModel
{
    protected $table = 'ph_cities';

    protected $fillable = ['id', 'name'];
}
