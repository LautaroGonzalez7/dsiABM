<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loans extends Model
{
    protected $fillable = ['user_id','resource_id'];
    public $timestamps = false;
}
