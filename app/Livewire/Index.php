<?php

namespace App\Livewire;

use Livewire\Component;

class Index extends Component
{
    public $base;
    public $search;
    public function render()
    {
        $this->base = \App\Models\Base::where('name','LIKE','%'.$this->search.'%')
            ->orWhere('desc','LIKE','%'.$this->search.'%')
            ->get();
        return view('livewire.index');
    }
}
