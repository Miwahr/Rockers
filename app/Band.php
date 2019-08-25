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
        $bands = DB::table('bands')->select(DB::raw('name, start_at, finish_at, website, GROUP_CONCAT(DISTINCT rockers.alias SEPARATOR ", ") AS members'))
            ->leftJoin('memberships', 'bands.id', '=', 'memberships.band_id')
            ->leftJoin('rockers', 'rockers.id', '=', 'memberships.rocker_id')
            ->groupBy('bands.name', 'bands.start_at', 'bands.finish_at', 'bands.website')
            ->get();
        return $bands;
    }
}
