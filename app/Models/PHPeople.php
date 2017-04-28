<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PHPeople extends PHBaseModel
{
    protected $table = 'ph_people';

    protected $fillable = ['id', 'name', 'surname', 'phone_number', 'city_id'];

    public function cities()
    {
        return $this->hasOne(PHCities::class, 'id', 'city_id');
    }

    public function hobbiesConect()
    {
        return $this->hasMany(PHConnectionsPeopleHobbies::class, 'people_id', 'id')->with('hobbies');

    }

}
