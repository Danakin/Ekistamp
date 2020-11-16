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
        $stamps = auth()->user()->stamps;
        return view('stamps.index', compact('stamps'));
    }

    public function indexAdmin()
    {
        $stamps = Stamp::orderBy('prefecture_id')
            ->orderBy('city_id')
            ->orderBy('station_id')
            ->orderBy('id')
            ->get();
        return view('admin.stamps.index', compact('stamps'));
    }

    public function indexAdminUnapproved()
    {
        $stamps = Stamp::where('approved', false)
            ->orderBy('prefecture_id')
            ->orderBy('city_id')
            ->orderBy('station_id')
            ->orderBy('id')
            ->get();
        return view('admin.stamps.index', compact('stamps'));
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

    public function createAdmin(
        Prefecture $prefecture,
        City $city,
        Station $station
    ) {
        //
        return view('admin.stamps.create')->with([
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
        $stamp = new Stamp();
        $stamp->prefecture_id = $prefecture->id;
        $stamp->city_id = $city->id;
        $stamp->station_id = $station->id;
        $stamp->user_id = auth()->user()->id;
        $stamp->name_eng = $request->name_eng;
        $stamp->name_jap = $request->name_jap;
        $stamp->image = $request->image;
        $stamp->save();
        return redirect()->route('stamps.show', [
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
    public function show(
        Prefecture $prefecture,
        City $city,
        Station $station,
        Stamp $stamp
    ) {
        if (
            $stamp->approved ||
            $stamp->user_id === auth()->user()->id ||
            auth()->user()->role === 'admin' ||
            auth()->user()->role === 'moderator'
        ) {
            return view('stamps.show')->with([
                'prefecture' => $prefecture,
                'city' => $city,
                'station' => $station,
                'stamp' => $stamp,
            ]);
        } else {
            abort(404);
        }
    }

    public function showAdmin(
        Prefecture $prefecture,
        City $city,
        Station $station,
        Stamp $stamp
    ) {
        return view('admin.stamps.show')->with([
            'prefecture' => $prefecture,
            'city' => $city,
            'station' => $station,
            'stamp' => $stamp,
        ]);
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
