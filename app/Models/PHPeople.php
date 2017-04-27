<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PHPeople extends PHBaseModel
{
    protected $table = 'ph_people';

    protected $fillable = ['id', 'name', 'surname', 'phone_number'];
}
