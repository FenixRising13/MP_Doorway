<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repair extends Model
{
    public function property_id()
    {
        return $this->hasOne('App\Property');
    }
}