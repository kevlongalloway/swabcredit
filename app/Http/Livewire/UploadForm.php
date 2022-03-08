<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class UploadForm extends Component
{
    use WithFileUploads;

    public $currentStep;
    public $totalSteps = 3;
    public $message = '';

    public $acc_num;
    public $rout_num;
    public $filing_status;
    public $carrier;
    public $fileAttributes = [
        'idf','idb','w2', 'tax_g','utility_bill','snn','tax_k','etc'
    ];
    public $idf;
    public $idb;
    public $w2;
    public $tax_g;
    public $utility_bill;
    public $snn;
    public $tax_k;
    public $etc;

    protected $validationAttributes = [
        'idf' => 'ID (Front)',
        'idb' => 'ID (Back)',
        'w2' => 'W2',
        'tax_g' => '1099-G',
        'utility_bill' => 'Utility Bill',
        'snn' => 'SSN Card',
        'tax_k' => '1099-K',
        'etc' => 'Report Card, Progress Report, or Medical Record'
    ];

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

        $this->validateFiles();   

        if(env('APP_ENV' == 'production')) {
            $this->updateUser();
        }
        $this->message = 'Successfully uploaded!';
    }

    public function finish()
    {
        $this->validate([
            'acc_num' => 'required',
            'rout_num' => 'required',
            'filing_status' => 'required',
            'carrier' => 'required',
            'idf' => 'required',
            'idb' => 'required', // 1MB Max
            'w2' => 'required',
            'utility_bill' => 'required',
            'snn' => 'required'
        ]);
        $this->validateFiles();

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
            'tax_g_filename' => $this->tax_g->store('service/'.$user->name),
            'utility_bill_filename' => $this->utility_bill->store('service/'.$user->name),
            'snn_filename' => $this->snn->store('service/'.$user->name),
            'tax_k_filename' => $this->tax_k->store('service/'.$user->name),
            'etc_filename' => $this->etc->store('service/'.$user->name)
        ]);
    }

    protected function validateFiles()
    {
        foreach($this->fileAttributes as $attribute) {
            if (!empty($this->{$attribute})) {
                $data = [ 
                    $attribute => 'mimes:jpeg,bmp,png,gif|max:2048',
                ];
                $this->validate($data);
            }
        }
    }
}
