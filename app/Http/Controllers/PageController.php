<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Train;

class PageController extends Controller
{
    public function home()
    {
        return view('homepage');
    }

    public function list_trains()
    {

        $today_trains = DB::select('SELECT * FROM `trains` WHERE DATE_FORMAT(departure_time, "%Y-%m-%d") = CURRENT_DATE');



        //WHERE departure_time BETWEEN 'CURDATE() 00:00:00' AND 'CURDATE() 23:59:59'




        return view('list_trains', compact('today_trains'));
    }
}
