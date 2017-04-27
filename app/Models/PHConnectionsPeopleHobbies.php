<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PHConnectionsPeopleHobbies extends PHBaseModel
{
    protected $table = 'ph_people';

    protected $fillable = ['id', 'people_id', 'hobbies_id'];
}
