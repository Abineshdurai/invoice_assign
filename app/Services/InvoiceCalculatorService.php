<?php

namespace App\Services;

class InvoiceCalculatorService
{
    public function calculate($quantity, $price, $taxPercent)
    {
        $subtotal = $quantity * $price;
        $taxAmount = $subtotal * ($taxPercent / 100);
        $total = $subtotal + $taxAmount;

        return [
            'subtotal' => $subtotal,
            'taxAmt' => $taxAmount,
            'total' => $total
        ];
    }
}
