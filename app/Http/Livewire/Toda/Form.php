<?php

namespace App\Http\Livewire\Toda;

use App\Models\TodoItem;
use Livewire\Component;


class Form extends Component
{

    public $description;

    protected $rules= [
        "description" => 'required|min:6'
    ];

    public function render()
    {
        return view('livewire.toda.form');
    }

    public function createItem(){
        $this->validate();
        $object = new TodoItem();
        $object->description = $this->description;
        $object->save();

        $this->emit('saved');
    }
}
