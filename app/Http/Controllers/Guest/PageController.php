<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\currtrain;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        $currtrains = Currtrain::all()->where('date_departure', '=', '2022-12-19');
        return view('trains.index', compact('trains', 'currtrains'));
    }
}
