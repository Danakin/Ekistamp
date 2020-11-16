<?php

namespace App\Http\Controllers;

use App\Models\Prefecture;
use App\Models\City;
use App\Models\Station;
use App\Models\Stamp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            ->paginate(30);
        return view('admin.stamps.index', compact('stamps'));
    }

    public function indexAdminUnapproved()
    {
        $stamps = Stamp::where('approved', false)
            ->orderBy('prefecture_id')
            ->orderBy('city_id')
            ->orderBy('station_id')
            ->orderBy('id')
            ->paginate(3);
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

    public function storeAdmin(
        Request $request,
        Prefecture $prefecture,
        City $city,
        Station $station
    ) {
        $request->validate([
            'prefecture_id' => "gt:0",
            'city_id' => "gt:0",
            'station_id' => "gt:0",
            'name_eng' => "string",
            'name_jap' => "string",
            'image' => "string",
        ]);
        $stamp = new Stamp();
        $stamp->prefecture_id = $request->prefecture_id;
        $stamp->city_id = $request->city_id;
        $stamp->station_id = $request->station_id;
        $stamp->user_id = auth()->user()->id;
        $stamp->name_eng = $request->name_eng;
        $stamp->name_jap = $request->name_jap;
        $stamp['approved'] = $request->approved ? true : false;
        $stamp->image = $request->image;
        $stamp->save();
        return redirect()->route('admin.stamps.show', [
            $request->prefecture_id,
            $request->city_id,
            $request->station_id,
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
    public function edit(
        Prefecture $prefecture,
        City $city,
        Station $station,
        Stamp $stamp
    ) {
        //
        return view('admin.stamps.edit')->with([
            'prefecture' => $prefecture,
            'city' => $city,
            'station' => $station,
            'stamp' => $stamp,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stamp  $stamp
     * @return \Illuminate\Http\Response
     */
    public function update(
        Request $request,
        Prefecture $prefecture,
        City $city,
        Station $station,
        Stamp $stamp
    ) {
        if ($request->approved) {
            $request['approved'] = true;
        } else {
            $request['approved'] = false;
        }
        $stamp->name_eng = $request->name_eng;
        $stamp->name_jap = $request->name_jap;
        $stamp->approved = $request->approved;
        if ($request->image && $request->image !== $stamp->image) {
            Storage::disk('public')->delete($stamp->image);
            $stamp->image = $request->image;
        }
        $stamp->save();
        return redirect()->route('admin.stamps.show', [
            $prefecture,
            $city,
            $station,
            $stamp,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stamp  $stamp
     * @return \Illuminate\Http\Response
     */
    public function destroy(
        Prefecture $prefecture,
        City $city,
        Station $station,
        Stamp $stamp
    ) {
        Storage::disk('public')->delete($stamp->image);

        Stamp::where([
            'prefecture_id' => $prefecture->id,
            'city_id' => $city->id,
            'station_id' => $station->id,
            'id' => $stamp->id,
        ])
            ->first()
            ->delete();
        return redirect()
            ->route('admin.stamps.index')
            ->with('success', 'Stamps deleted successfully');
    }
}
