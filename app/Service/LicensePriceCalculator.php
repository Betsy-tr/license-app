<?php

namespace App\Service;

class LicensePriceCalculator{

    public static function calculatePrice(int $lenght): float
    {

        return $lenght <= 5 ? $lenght * 15 : 50 + ($lenght - 5) * 10 ;
        
    }
}
