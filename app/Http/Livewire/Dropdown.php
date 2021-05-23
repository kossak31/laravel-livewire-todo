<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Dropdown extends Component
{

 
   public $getuser;
   public $user_data;


    public function render()
    {        
        if(!empty($this->getuser)) {
            $this->user_data = \App\Models\User::where('id', $this->getuser)->get();
        } else {
            $this->user_data = \App\Models\User::all();
        }

        return view('livewire.dropdown')
            ->withUsers(\App\Models\User::orderBy('name')->get());
    }
}
