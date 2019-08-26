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
            'name' => $request->name,
            'bday' => $request->bday,
            'died' => $request->died
        ]);
        return redirect()->action('RockerController@show_all');
    }

    public function show_all()
    {
        $rockers = \App\Rocker::show_all();
        return view('rocker.show_all', ['rockers' => $rockers]);
    }
}
