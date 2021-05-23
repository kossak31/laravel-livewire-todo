<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class AddTask extends Component
{
    public $name;

    public function render()
    {
        return view('livewire.add-task');
    }

    public function save()
    {
        $task = new \App\Models\Task();
        $task->user_id = Auth::id();
        $task->name = $this->name;
        $task->save();

        $this->reset();

        $this->emit('taskAdded');
    }

}