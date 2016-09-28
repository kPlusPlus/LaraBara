<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    public $table = "customer";
    public $primaryKey  = 'customer_id';
}