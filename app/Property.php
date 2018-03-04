<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    public function tenant()
    {
        return $this->hasMany('App\User');
    }
}
