<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class UploadForm extends Component
{
    public $currentStep;
    public $totalSteps = 3;
    public $message = '';

    public $acc_num;
    public $rout_num;
    public $filing_status;
    public $carrier;

    public $idf;
    public $idb;
    public $w2;
    public $tax_g;
    public $utility_bill;
    public $snn;
    public $tax_k;
    public $etc;

    public function mount()
    {
        $this->currentStep = 1;
    }

    public function render()
    {
        return view('livewire.upload-form');
    }

    public function next()
    {
        $this->currentStep++;
    }
    public function back()
    {
        $this->currentStep--;
    }

    public function save()
    {
        if(env('APP_ENV' == 'production')) {
            $this->updateUser();
        }
        $this->message = 'Successfully uploaded!';
    }

    public function finish()
    {
        if(env('APP_ENV' == 'production')) {
            $this->updateUser();
        }
        $this->message = 'Successfully uploaded!';
        return redirect()->route('success', ['type' => 'uploaded']);
    }

    public function updateUser()
    {
        $user = auth()->user();
        $user->update([
            'acc_num' => $acc_num,
            'rout_num' => $rout_num,
            'filing_status' => $filing_status,
            'carrier' => $carrier,
            'id_front_filename' => $this->idf->store('service/'.$user->name),
            'id_back_filename' => $this->idb->store('service/'.$user->name),
            'w2_filename' => $this->w2->store('service/'.$user->name),
            'tax_g_filename' => $this->_tax_g->store('service/'.$user->name),
            'utility_bill_filename' => $this->utility_bill->store('service/'.$user->name),
            'snn_filename' => $this->snn->store('service/'.$user->name),
            'tax_k_filename' => $this->tax_k->store('service/'.$user->name),
            'etc_filename' => $this->etc->store('service/'.$user->name)
        ]);
    }
}
