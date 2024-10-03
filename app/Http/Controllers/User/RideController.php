<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Driver;
use App\Models\Rides;

class RideController extends Controller
{

    private $estimate_cost;
    private $estimate_drive_time;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.rides.index');
    }

    public function searchTaxi(Request $request)
    {
        $drivers = Driver::all();
        // De input van de sessie uithalen
        $location = session('location');
        $endlocation = session('endlocation');

        // Geef een random getal tussen 1 en 10 voor de kosten en afstand van de rit en sla deze op in de sessie
        $estimate_cost = $this->estimate_cost  = rand(1, 10);
        $estimate_drive_time = $this->estimate_drive_time  = rand(1, 10);
        session()->put('estimate_cost', $estimate_cost);
        session()->put('estimate_drive_time', $estimate_drive_time);

        return view('user.rides.taxi', compact('drivers', 'location', 'endlocation', 'estimate_cost', 'estimate_drive_time'));
    }

    public function acceptTaxi(Request $request)
    {
        $driver = Driver::findOrFail($request->driver_id);
        $location = session('location');
        $endlocation = session('endlocation');
        $estimate_cost = session('estimate_cost');
        $estimate_drive_time = session('estimate_drive_time');

        $ride = new Rides();
        $ride->driver_id = $driver->id;
        $ride->user_id = auth()->user()->id;
        $ride->location = $location;
        $ride->status_id = 1;
        $ride->end_location = $endlocation;
        $ride->estimate_cost = $estimate_cost;
        $ride->estimate_drive_time = $estimate_drive_time;
        $ride->save();

        session()->put('ride_id', $ride->id);

        return redirect()->route('thankyou');
    }

    public function location(Request $request)
    {
        // Sla de input van de locatie op in de sessie(session)
        $request->session()->put('location', $request->location);
        $request->session()->put('endlocation', $request->endlocation);

        return redirect()->route('ride.taxi');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.rides.create');
    }

    public function ride($id)
    {
        $ride = Rides::findOrFail($id);

        return view('user.ride.ride', compact('ride'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ride = Rides::findOrFail($id);

        return view('user.rides.show', compact('ride'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
