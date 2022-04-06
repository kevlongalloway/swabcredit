<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class AdminCustomers extends Component
{
    use WithPagination;

    public $query = '';


    public function render()
    {
        $searchTerm = '%' .$this->query . '%';
        return view('livewire.admin-customers', [
            'users' => User::where('name', 'like', $searchTerm)
                            ->orWhere('email', 'like', $searchTerm)
                            ->paginate(10)
        ]);
    }
}
