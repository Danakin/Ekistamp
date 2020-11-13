<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OwnStamp extends Component
{
    public $owned;

    public function mount()
    {
        $this->owned = auth()->user()->stamps;
    }

    public function

    public function render()
    {
        return view('livewire.own-stamp');
    }
}
