<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use SoftDeletes;    

    protected $dates = ['deleted_at'];

    public function planId(){
        return $this->hasOne('App\Plan', 'id', 'plan_id');
    }

    public function customerId(){
        return $this->hasOne('App\Customer', 'id', 'customer_id');
    }
}
