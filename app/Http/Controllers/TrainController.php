<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){
        $trains = Train::orderBy('orario_di_partenza', 'ASC')->get();

        return view('trains.index', ["trains" => $trains, "train" => new Train()]);
    }

    public function show($id){
        $train = Train::findOrFail($id);
        return view('trains.show', ['train' => $train]);
    }
}


