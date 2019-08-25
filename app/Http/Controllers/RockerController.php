<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RockerController extends Controller
{
    public function add_form()
    {
        return view('rocker.add_form');
    }

    public function add(\App\Http\Requests\Rockers $request)
    {
        \App\Rocker::create([
            'alias' => $request->alias,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'bday' => $request->bday,
            'died' => $request->died
        ]);
        return redirect()->action('RockerController@show_all');
    }

    public function show_all()
    {
        $rockers = \App\Rocker::all();
        return view('rocker.show_all', ['rockers' => $rockers]);
    }
}
