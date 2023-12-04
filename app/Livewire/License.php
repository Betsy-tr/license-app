<?php

namespace App\Livewire;

use App\Service\LicensePriceCalculator;
use Livewire\Component;

class License extends Component
{
    public $lenght = 2 ;

    public function render()
    {
        return view('livewire.license', [

            'amount' => LicensePriceCalculator::calculatePrice($this->lenght)
        ]);
    }

}
