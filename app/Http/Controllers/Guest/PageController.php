<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index()
    {
        $trains = Train::all();
        $tomorrow_trains = Train::where('departure_time', '>=', date('Y-m-d'))->get();
        return view('home', compact('trains', 'tomorrow_trains'));
    }
}
