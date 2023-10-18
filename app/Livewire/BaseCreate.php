<?php

namespace App\Livewire;

use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class BaseCreate extends Component
{
    use WithFileUploads;
    public $name;
    public $desc;
    public $file;
    public $status;

    public function create()
    {
        $validated = $this->validate([
            'name' => 'required|min:3',
            'desc' => 'required|min:3',
            'file' => 'file|mimes:pdf,doc,docx',
        ]);

        $filename = md5(time()). '.' . $this->file->getClientOriginalExtension();
        $this->file->storeAs('uploads', $filename);

        $this->file = null;

        \App\Models\Base::create([
            'name'  => $this->name,
            'desc'  => $this->desc,
            'image'  => $filename,
            'status'  => $this->status
        ]);

        $this->name = "";
        $this->desc = "";
        session()->flash('success',"Malumotlar muofaqiyatli qo'shildi");
    }
    public function render()
    {
        return view('livewire.base-create');
    }
}
