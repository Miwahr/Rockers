<?php

namespace App\Http\Controllers;

use App\Http\Requests\Bands;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BandController extends Controller
{


    public function add_form()
    {
        return view('band.add_form');
    }

    public function add(\App\Http\Requests\Bands $request)
    {
        \App\Band::create([
            'name' => $request->name,
            'start_at' => $request->start_at,
            'finish_at' => $request->finish_at,
            'website' => $request->website
        ]);
        return redirect()->action('BandController@show_all');
    }

    public function show_all()
    {
        $bands = \App\Band::show_all();
        return view('band.show_all', ['bands' => $bands]);
    }
}
