<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    public $timestamps = false;
    protected $keyType = 'string';
    protected $fillable = ['rocker_id', 'band_id', 'start', 'finish'];
}
