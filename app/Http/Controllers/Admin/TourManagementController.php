<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TourManagementController extends Controller
{
    function index(){
        $tour = Tour::all();
        return view('admin.addTour',["tour"=>$tour]);
    }
    function create(){
        return view('admin.addTour');

    }
    function store(Request $request){
        $name = $request->input("name");
        $price = $request->input("price");
        $typetour = $request->input("typetour");
        $depart = $request->input("depart");
        $schedule=$request->input("Schedule");
        $number=$request->input("number");
        $file = $request->file("image")->store("public");
        DB::table('tours')->insert(["name"=>$name,
                                    "price"=>$price,
                                    "typetour"=>$typetour,
                                    "Schedule"=>$schedule,
                                    "depart"=>$depart,
                                    "number"=>$number,
                                    "image"=>$file]
                                    
        );
        }
}
