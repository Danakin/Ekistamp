<?php

namespace App\Http\Controllers;

use App\Models\Prefecture;
use App\Models\City;
use App\Models\Station;
use App\Models\Stamp;
use Illuminate\Http\Request;

class StampController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Prefecture $prefecture, City $city, Station $station)
    {
        //
        return view('stamps.create')->with([
            'prefecture' => $prefecture,
            'city' => $city,
            'station' => $station,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(
        Request $request,
        Prefecture $prefecture,
        City $city,
        Station $station
    ) {
        dd($request, $prefecture, $city, $station);
        $stamp = new Stamp();
        $stamp->prefecture_id = $prefecture->id;
        $stamp->city_id = $city->id;
        $stamp->station_id = $station->id;
        $stamp->name_eng = $request->name_eng;
        $stamp->name_jap = $request->name_jap;
        $stamp->image = $request->image;
        $stamp->save();
        return redirect()->route('stamp.show', [
            $prefecture,
            $city,
            $station,
            $stamp,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stamp  $stamp
     * @return \Illuminate\Http\Response
     */
    public function show(Stamp $stamp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stamp  $stamp
     * @return \Illuminate\Http\Response
     */
    public function edit(Stamp $stamp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stamp  $stamp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stamp $stamp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stamp  $stamp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stamp $stamp)
    {
        //
    }
}
