<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputCheckbox extends Component
{
    public $name;
    public $checked;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name = "", $checked = false)
    {
        $this->name = $name;
        $this->checked = $checked;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.input-checkbox');
    }
}
