<?php

namespace App\Http\Livewire\Partials;

use Livewire\Component;

use App\Models\Prefecture;
use App\Models\City;
use App\Models\Station;

class Select extends Component
{
    public $prefectures = [];
    public $selected_prefecture_id = 0;
    public $cities = [];
    public $selected_city_id = 0;
    public $stations = [];
    public $selected_station_id = 0;

    public function mount()
    {
        $this->prefectures = Prefecture::orderBy('id')->get();
    }

    public function load_cities()
    {
        $this->cities = City::where(
            'prefecture_id',
            $this->selected_prefecture_id
        )
            ->orderBy('id')
            ->get();
        $this->selected_city_id = 0;
        $this->selected_station_id = 0;
    }

    public function load_stations()
    {
        $this->stations = Station::where([
            ['prefecture_id', $this->selected_prefecture_id],
            ['city_id', $this->selected_city_id],
        ])
            ->orderBy('id')
            ->get();
        $this->selected_station_id = 0;
    }

    public function render()
    {
        return view('livewire.partials.select');
    }
}
