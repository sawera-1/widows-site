<?php

namespace App\Services;

class PricingService
{
    /**
     * Calculate the final price of a product with given adjustments.
     * 
     * @param float $basePrice
     * @param array $adjustments List of price adjustment floats
     * @return float
     */
    public function calculateFinalPrice(float $basePrice, array $adjustments = []): float
    {
        $finalPrice = $basePrice;
        
        foreach ($adjustments as $adjustment) {
            $finalPrice += $adjustment;
        }
        
        return round($finalPrice, 2);
    }
}
