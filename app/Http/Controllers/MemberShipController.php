<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberShipController extends Controller
{
    public function add_form()
    {
        $bands = \App\Band::pluck('name','id');
        $rockers = \App\Rocker::pluck('alias','id');
        return view('membership.add_form', ['bands' => $bands, 'rockers' => $rockers]);
    }

    public function add(\App\Http\Requests\MemberShip $request)
    {
        \App\Membership::create([
            'rocker_id' => $request->rocker_id,
            'band_id' => $request->band_id,
            'start' => $request->start,
            'finish' => $request->finish
        ]);
        return redirect()->action('MemberShipController@add_form');
    }
}
