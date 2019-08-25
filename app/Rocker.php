<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rocker extends Model
{
    public $timestamps = false;
    protected $keyType = 'string';
    protected $fillable = ['alias', 'first_name', 'last_name', 'bday', 'died'];
}
