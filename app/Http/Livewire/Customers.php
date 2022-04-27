<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Customers extends Component
{   
    public $query ="";
    public $users;
    public function render()
    {   
        $seach = '%' . $this->query . '%';
        $this->users = User::where('name', 'like', $seach)->simplePaginate(10);
        return view('livewire.customers');
    }
}
