<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded = [];

    public function state()
    {
        return $this->belongsTo('App\State');
    }
    
    public function reason()
    {
        return $this->belongsTo('App\Reason');
    }
}
