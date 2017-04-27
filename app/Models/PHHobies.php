<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PHHobies extends PHBaseModel
{
    protected $table = 'ph_hobbies';

    protected $fillable = ['id', 'name'];

    public function conect()
    {
        return $this->hasMany(PHConnectionsPeopleHobbies::class, 'hobbies_id', 'id')->with(['people']);
    }



}
