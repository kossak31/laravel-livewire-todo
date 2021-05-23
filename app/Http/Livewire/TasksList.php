<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class TasksList extends Component
{
    public $tasks;
    public $user_id;

    protected $listeners = [
        'taskDeleted' => 'refreshTasks',
        'taskAdded' => 'refreshTasks'
    ];

    public function mount()
    {
        $this->user_id = Auth::id();
        $this->tasks = \App\Models\Task::where('user_id', $this->user_id)->get();
       // $this->tasks = \App\Models\Task::all();
    }

    public function tasks()
    {
       // return \App\Models\Task::all();
       return \App\Models\Task::where('user_id', $this->user_id)->get();
    }

    public function render()
    {
        return view('livewire.tasks-list');
    }

    public function refreshTasks()
    {
       // $this->tasks = \App\Models\Task::all();
       $this->tasks = \App\Models\Task::where('user_id', $this->user_id)->get();
    }
}
