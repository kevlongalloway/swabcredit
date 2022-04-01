<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class UploadForm extends Component
{
    use WithFileUploads;

    /**
     * The current step on the upload component.
     *
     * @var int
     */
    public $currentStep;

    /**
     * The total amount of steps.
     *
     * @var int
     */
    public $totalSteps = 3;

    /**
     * If upload form started.
     *
     * @var bool
     */
    public $start;

    /**
     * The message to the user.
     *
     * @var string
     */
    public $message = '';

    /**
     * User input for account number.
     *
     * @var string
     */
    public $acc_num;

    /**
     * User input for routing number.
     *
     * @var string
     */
    public $rout_num;

    /**
     * User input for filing status.
     *
     * @var int
     */
    public $filing_status;

    /**
     * User input for carrier
     *
     * @var int
     */
    public $carrier;

    /**
     * User input for file ID Front.
     *
     * @var int
     */
    public $idf;

    /**
     * User input for file ID Front.
     *
     * @var int
     */
    public $idb;

    /**
     * User input for file ID Front.
     *
     * @var int
     */
    public $w2;

    /**
     * User input for file ID Front.
     *
     * @var int
     */
    public $tax_g;

    /**
     * User input for file ID Front.
     *
     * @var int
     */
    public $utility_bill;

    /**
     * User input for file ID Front.
     *
     * @var int
     */
    public $snn;

    /**
     * User input for file ID Front.
     *
     * @var int
     */
    public $tax_k;

    /**
     * User input for file ID Front.
     *
     * @var int
     */
    public $etc;

    /**
     * Input Attributes  that are file uploads.
     *
     * @var array<string>
     */
    public $fileAttributes = [
        'idf','idb','w2', 'tax_g','utility_bill','snn','tax_k','etc'
    ];

    /**
     * User input for file ID Front.
     *
     * @var array<string>
     */
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

    /**
     * User input for file ID Front.
     *
     * @var int
     */
    public function mount()
    {
        $this->currentStep = 1;
        $this->start = false;
    }

    /**
     * Display the success modal with a message.
     *
     * @return \Illuminate\Http\Response
     */
    public function render()
    {
        return view('livewire.upload-form');
    }

    /**
     * User input for file ID Front.
     *
     * @var int
     */
    public function start()
    {
        $this->start = true;
    }

    /**
     * User input for file ID Front.
     *
     * @var int
     */
    public function next()
    {
        $this->currentStep++;
    }

    /**
     * User input for file ID Front.
     *
     * @var int
     */
    public function back()
    {
        $this->currentStep--;
    }

    /**
     * User input for file ID Front.
     *
     * @var int
     */
    public function save()
    {
        $this->validateFiles();   

        $this->updateUser();
        
        $this->message = 'Successfully uploaded!!';
    }

    /**
     * User input for file ID Front.
     *
     * @var int
     */
    public function finish()
    {
        $this->validate([
            'acc_num' => 'required',
            'rout_num' => 'required',
            'filing_status' => 'required',
            'carrier' => 'required',
            'idf' => 'required',
            'idb' => 'required', 
            'w2' => 'required',
            'utility_bill' => 'required',
            'snn' => 'required'
        ]);

        $this->validateFiles();

        $this->updateUser();
        
        $this->message = 'Successfully uploaded!';
        return redirect()->route('success', ['type' => 'uploaded']);
    }

    /**
     * User input for file ID Front.
     *
     * @var int
     */
    protected function updateUser()
    {
        $user = auth()->user();
        $user->update([
            'acc_num' => $this->acc_num,
            'rout_num' => $this->rout_num,
            'filing_status' => $this->filing_status,
            'carrier' => $this->carrier,
            'id_front_filename' => $this->idf->store('docs'),
            'id_back_filename' => $this->idb->store('docs'),
            'w2_filename' => $this->w2->store('docs'),
            'tax_g_filename' => $this->tax_g->store('docs'),
            'utility_bill_filename' => $this->utility_bill->store('docs'),
            'snn_filename' => $this->snn->store('docs'),
            'tax_k_filename' => $this->tax_k->store('docs'),
            'etc_filename' => $this->etc->store('docs')
        ]);
    }

    /**
     * User input for file ID Front.
     *
     * @var int
     */
    protected function validateFiles()
    {
        foreach($this->fileAttributes as $attribute) {
            if (!empty($this->{$attribute})) {
                $data = [ 
                    $attribute => 'mimes:jpeg,bmp,png,gif|max:2048', // 2MB Max
                ];
                $this->validate($data);
            }
        }
    }
}
