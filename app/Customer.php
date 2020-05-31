<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    protected $dates = ['deleted_at'];
    
    public function userId()
    {
        return $this->hasOne('App\User');
    }   
}
