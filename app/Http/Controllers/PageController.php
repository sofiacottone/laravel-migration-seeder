<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        $data = [
            'trains' => $trains,
        ];
        return view('home', $data);
    }

    public function departures()
    {
        $trains = Train::whereDate('departure_time', today())->get();
        $data = [
            'trains' => $trains,
        ];
        return view('home', $data);
    }
}
