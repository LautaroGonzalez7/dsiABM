<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loans extends Model
{
    protected $fillable = ['customer_id','resource_id','since','until'];
    public $timestamps = false;
}
