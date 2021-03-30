<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThermofaceController extends Controller
{
    public function presence()
    {
        return view('thermoface.presence');
    }
}
