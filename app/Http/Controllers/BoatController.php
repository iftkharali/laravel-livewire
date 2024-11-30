<?php

namespace App\Http\Controllers;


class BoatController extends Controller
{
    public function create()
    {
        return view('boats.create');
    }
}
