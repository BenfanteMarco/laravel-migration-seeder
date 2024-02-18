<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Train;

class TrainController extends Controller
{
    public function index(){

        $today = now()->format('Y-m-d');
        $trains = Train::where('orario_partenza', 'LIKE', $today.'%')->get();
        return view('home', compact('trains'));
    }
}
