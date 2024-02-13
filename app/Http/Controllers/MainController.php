<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\train;

class MainController extends Controller
{
    public function index(){

        $trains = Train ::all()-> where('orario_di_partenza', '05:42:00');
        
        return view('pages.index', compact('trains'));
    }
}
