<?php

namespace App\Http\Livewire\Toda;

use App\Models\TodoItem;
use Livewire\Component;


class Show extends Component
{
    protected $listeners = ['saved'];

    public function render()
    {
        $list = TodoItem::all()->sortByDesc('created_at');

        return view('livewire.toda.show', ['list' => $list]);
    }

    public function saved()
    {
        $this->render();
    }

    //Actions
    public function markAsDone(TodoItem $object)
    {
        $object->done = true;
        $object->save();
    }

    public function markAsToDo(TodoItem $object)
    {
        $object->done = false;
        $object->save();
    }

    public function deleteItem(TodoItem $object)
    {
        $object->delete();
    }


}
