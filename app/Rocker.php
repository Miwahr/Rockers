<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Rocker extends Model
{
    public $timestamps = false;
    protected $keyType = 'string';
    protected $fillable = ['alias', 'name', 'bday', 'died'];

    static public function show_all()
    {
        /*SELECT r.*, group_concat(DISTINCT b.name SEPARATOR ", ") AS gr FROM rockers AS r
            LEFT JOIN memberships AS m ON r.id = m.rocker_id
            LEFT JOIN bands AS b ON b.id = m.band_id
            group by r.id;*/
        $rockers = DB::table('rockers')->select(DB::raw('rockers.*, GROUP_CONCAT(DISTINCT bands.name SEPARATOR ", ") AS bands'))
            ->leftJoin('memberships', 'rockers.id', '=', 'memberships.rocker_id')
            ->leftJoin('bands', 'bands.id', '=', 'memberships.band_id')
            ->groupBy('rockers.id')
            ->get();
        return $rockers;
    }
}
