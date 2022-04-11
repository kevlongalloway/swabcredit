<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class UserInfo extends Component
{
    public $user;

    public function render()
    {
        return view('livewire.user-info');
    }

    public function downloadFile($filename)
    {
        dd($this->user->{$filename});
        return Storage::download($this->user->{$filename});
    }
}
