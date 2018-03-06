<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repair extends Model
{
    protected $table="repairs";

    public function property()
    {
        return $this->hasOne('App\Property', 'id', 'property_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}