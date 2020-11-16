<?php

namespace App\Http\Livewire\Stamps;

use Livewire\Component;

use App\Models\Prefecture;
use App\Models\City;
use App\Models\Station;
use App\Models\Stamp;

class Index extends Component
{
    public $prefectures;
    public $selected_prefecture;
    public $selected_prefecture_id;
    public $cities;
    public $selected_city;
    public $selected_city_id;
    public $stations;
    public $selected_station;
    public $selected_station_id;
    public $stamps;
    public $selected_stamp;
    public $selected_stamp_id;

    public function mount()
    {
        $this->prefectures = Prefecture::all();
    }

    public function load_cities()
    {
        $this->selected_prefecture = $this->prefectures
            ->filter(function ($prefecture) {
                return $prefecture->id ===
                    intval($this->selected_prefecture_id);
            })
            ->first();

        $this->cities = $this->selected_prefecture->cities;
    }

    public function load_stations()
    {
        $this->selected_city = $this->cities
            ->filter(function ($city) {
                return $city->id === intval($this->selected_city_id);
            })
            ->first();

        $this->stations = $this->selected_city->stations;
    }

    public function load_stamps()
    {
        $this->selected_station = $this->stations
            ->filter(function ($station) {
                return $station->id === intval($this->selected_station_id);
            })
            ->first();

        $this->stamps = $this->selected_station->stamps->where(
            'approved',
            true
        );
    }

    public function render()
    {
        return view('livewire.stamps.index')->extends('partials.app');
    }
}
