<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class booktourController extends Controller
{
    function index(){
        $tours = DB::table('tours')->get();
       return view("home",["tours"=>$tours]);
    }
}
