<?php

namespace App\Http\Controllers;

use App\Models\Truck;
use App\Models\Truck_trucker;
use App\Models\Trucker;
use Illuminate\Http\Request;

class TruckTruckerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $truck=Truck::find($request->truck_id);
        $truck->trucker()->attach($request->trucker_id);
    }

    public function asociar(){
        $trucks=Truck::All();
        $truckers=Trucker::all();
    }

   
}
