<?php

namespace App\Http\Livewire\Stamps\Admin;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Prefecture;
use App\Models\City;
use App\Models\Station;
use App\Models\Stamp;

class Index extends Component
{
    use WithPagination;

    public $prefectures;
    public $selected_prefecture_id = 0;
    public $cities = [];
    public $selected_city_id = 0;
    public $stations = [];
    public $selected_station_id = 0;

    public function mount()
    {
        $this->prefectures = Prefecture::orderBy('id')->get();
    }

    public function updated()
    {
        $this->resetPage();
    }

    public function load_cities()
    {
        $this->cities = City::where([
            ['prefecture_id', $this->selected_prefecture_id],
        ])->get();

        $this->selected_city_id = 0;
        $this->selected_station_id = 0;
    }

    public function load_stations()
    {
        $this->stations = Station::where([
            ['city_id', $this->selected_city_id],
        ])->get();

        $this->selected_station_id = 0;
    }

    public function render()
    {
        if (intval($this->selected_station_id) > 0) {
            $stamps = Stamp::where([['station_id', $this->selected_station_id]])
                ->orderBy('prefecture_id')
                ->orderBy('city_id')
                ->orderBy('station_id')
                ->orderBy('id')
                ->paginate(30);
        } elseif (intval($this->selected_city_id) > 0) {
            $stamps = Stamp::where([['city_id', $this->selected_city_id]])
                ->orderBy('prefecture_id')
                ->orderBy('city_id')
                ->orderBy('station_id')
                ->orderBy('id')
                ->paginate(30);
        } elseif (intval($this->selected_prefecture_id) > 0) {
            $stamps = Stamp::where([
                ['prefecture_id', $this->selected_prefecture_id],
            ])
                ->orderBy('prefecture_id')
                ->orderBy('city_id')
                ->orderBy('station_id')
                ->orderBy('id')
                ->paginate(30);
        } else {
            $stamps = Stamp::orderBy('prefecture_id')
                ->orderBy('city_id')
                ->orderBy('station_id')
                ->orderBy('id')
                ->paginate(30);
        }
        return view('livewire.stamps.admin.index', [
            'stamps' => $stamps,
        ])->extends('admin.partials.app');
    }
}
