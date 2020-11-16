<?php

namespace App\Http\Livewire;

use App\Models\Stamp;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class OwnStamp extends Component
{
    public $owned;
    public Stamp $stamp;

    public function mount($stamp)
    {
        $owned = auth()
            ->user()
            ->stamps->find($stamp->id);
        if ($owned) {
            $this->owned = true;
        } else {
            $this->owned = false;
        }
        $this->stamp = $stamp;
        $this->users = $stamp->users;
    }

    public function own($stamp_id)
    {
        auth()
            ->user()
            ->stamps()
            ->toggle($stamp_id);

        $this->owned = !$this->owned;
    }

    public function render()
    {
        return view('livewire.own-stamp');
    }
}
