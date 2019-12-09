<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $fillable = ['name', 'lastname', 'dni', 'legajo', 'phone', 'email', 'address'];
    public $timestamps = false;
}
