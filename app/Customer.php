<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Customer extends Model
{
    public function userId()
    {
        return $this->hasOne('App\User');
    }   
}
