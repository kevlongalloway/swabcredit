<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class AdminCustomers extends Component
{
    public $users;
    public $query = '';


    public function render()
    {
        $searchTerm = '%' .$this->query . '%';
        $this->users = User::where('name', 'like', $searchTerm)->get();
        return view('livewire.admin-customers');
    }
}
