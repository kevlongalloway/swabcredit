<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\Plan;
use App\Models\Service;

class Select extends Component
{
    public $service;
    public $service_id;
    public $subscription;
    public $subscriptions = [];
    public $plan;
    public $plans = [];

    public function mount()
    {
        $services = Service::all();

        foreach($services as $service) {
            if($this->service->path ==  $service->path) {
                $this->service_id = $service->id;
            }
        }
    }

    public function render()
    {
        $this->subscriptions = DB::table('products')
                               ->where('service_id', $this->service_id)
                               ->get();
        if(!empty($this->subscription)) {
            $this->plans = Plan::where('product_id', $this->subscription)->get();
        }


        return view('livewire.select');
    }
}
