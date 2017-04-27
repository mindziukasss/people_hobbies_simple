<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PHConnectionsPeopleHobbies extends Model


{
    protected $updated_at = false;

    protected $table = 'ph_people_hobbies_connections';

    protected $fillable = ['id', 'people_id', 'hobbies_id'];
}
