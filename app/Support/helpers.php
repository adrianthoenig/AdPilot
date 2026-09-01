<?php

if (!function_exists('formatCurrency')) {

    function formatCurrency(string $monthly_budget = '0', string $currencyCode = 'EUR'): string
    {
        $symbols = [
            'USD' => '$',
            'EUR' => '€',
            'GBP' => '£',
            'CHF' => 'CHF',
            'IRR' => '﷼',
            'CAD' => '$',
            'AUD' => '$',
            'NZD' => '$',
            'JPY' => '¥',
            'CNY' => '¥',
            'INR' => '₹',
            'SGD' => 'S$',
            'HKD' => 'HK$',
            'AED' => 'AED',
            'SAR' => '⃁',
            'SEK' => 'kr',
            'NOK' => 'kr',
            'DKK' => 'kr.',
            'MXN' => 'Mex$',
            'BRL' => 'R$',
            'PLN' => 'zł'
        ];

        return "{$monthly_budget} {$symbols[$currencyCode]}";
    }
}
