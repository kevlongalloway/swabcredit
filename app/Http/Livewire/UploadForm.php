<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UploadForm extends Component
{
    public $currentStep;
    public $totalSteps = 3;

    public function mount()
    {
        $this->dispatchBrowserEvent('refresh');
        $this->currentStep = 1;
    }

    public function render()
    {
        return view('livewire.upload-form');
    }

    public function next()
    {
        $this->currentStep++;
        $this->dispatchBrowserEvent('refresh');
    }
    public function back()
    {
        $this->currentStep--;
        $this->dispatchBrowserEvent('refresh');
    }
}
