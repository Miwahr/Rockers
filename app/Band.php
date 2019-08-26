<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Band extends Model
{
    public $timestamps = false;
    protected $keyType = 'string';
    protected $fillable = ['name', 'start_at', 'finish_at', 'website'];

    static public function show_all(){
        /*SELECT b.*, group_concat( DISTINCT r.alias SEPARATOR ", ") AS Members FROM bands as b
            LEFT JOIN memberships AS m ON b.id = m.band_id
            LEFT JOIN rockers AS r ON r.id = m.rocker_id
            group by b.id;*/
        $bands = DB::table('bands')->select(DB::raw('bands.*, GROUP_CONCAT(DISTINCT rockers.alias SEPARATOR ", ") AS members'))
            ->leftJoin('memberships', 'bands.id', '=', 'memberships.band_id')
            ->leftJoin('rockers', 'rockers.id', '=', 'memberships.rocker_id')
            ->groupBy('bands.id')
            ->get();
        return $bands;
    }

    static public function show_band($id){
        /*SELECT b.*, group_concat( DISTINCT r.alias SEPARATOR ", ") AS Members FROM bands as b
            LEFT JOIN memberships AS m ON b.id = m.band_id
            LEFT JOIN rockers AS r ON r.id = m.rocker_id
            WHERE b.id = 2
            group by b.id;*/
        $bands = DB::table('bands')->select(DB::raw('bands.*, GROUP_CONCAT(DISTINCT rockers.alias SEPARATOR ", ") AS members'))
            ->leftJoin('memberships', 'bands.id', '=', 'memberships.band_id')
            ->leftJoin('rockers', 'rockers.id', '=', 'memberships.rocker_id')
            ->where('bands.id', '=', $id)
            ->groupBy('bands.id')
            ->get();
        return $bands;
    }
}
