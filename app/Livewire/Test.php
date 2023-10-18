<?php

namespace App\Livewire;

use Livewire\Component;

class Test extends Component
{
    public function baseDelete($id)
    {
        dd("Salom".$id);
    }
    public function render()
    {
        return view('livewire.test');
    }
}
