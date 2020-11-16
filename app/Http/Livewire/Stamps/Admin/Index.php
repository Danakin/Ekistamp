<?php

namespace App\Http\Livewire\Stamps\Admin;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Prefecture;
use App\Models\Stamp;

class Index extends Component
{
    use WithPagination;

    public $prefectures;
    public $selected_prefecture_id = 0;

    public function mount()
    {
        $this->prefectures = Prefecture::orderBy('id')->get();
    }

    public function updated()
    {
        $this->resetPage();
    }

    public function render()
    {
        if (intval($this->selected_prefecture_id) === 0) {
            $stamps = Stamp::orderBy('prefecture_id')
                ->orderBy('city_id')
                ->orderBy('station_id')
                ->orderBy('id')
                ->paginate(30);
        } else {
            $stamps = Stamp::where([
                ['prefecture_id', $this->selected_prefecture_id],
            ])
                ->orderBy('prefecture_id')
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
