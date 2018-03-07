<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repair extends Model
{

    // * @var array
    //  */
    protected $fillable = [
        'property_id', 'description', 'completed', 'completed_at', 'contractor'
    ];

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