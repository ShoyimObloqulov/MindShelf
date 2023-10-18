<?php

namespace App\Livewire;

use Livewire\Component;

class Base extends Component
{
    public $base;

    public function baseDelete($id)
    {
       \App\Models\Base::find($id)->delete();
    }

    public function render()
    {
        $this->base = \App\Models\Base::get();
        return view('livewire.base');
    }
}
