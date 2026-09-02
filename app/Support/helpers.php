<?php

use Carbon\Carbon;

if (!function_exists('formatCurrency')) {

    function formatCurrency(string $monthly_budget = '0.00', string $currencyCode = 'EUR'): string
    {
        $symbols = [
            'USD' => [
                'symbol' =>'$',
                'placement' => 'before'
            ],
            'EUR' => [
                'symbol' =>'€',
                'placement' => 'after'
            ],
            'GBP' => [
                'symbol' =>'£',
                'placement' => 'before'
            ],
            'CHF' => [
                'symbol' =>'CHF',
                'placement' => 'before'
            ],
            'IRR' => [
                'symbol' =>'﷼',
                'placement' => 'after'
            ],
            'CAD' => [
                'symbol' =>'$',
                'placement' => 'before'
            ],
            'AUD' => [
                'symbol' =>'$',
                'placement' => 'before'
            ],
            'NZD' => [
                'symbol' =>'$',
                'placement' => 'before'
            ],
            'JPY' => [
                'symbol' =>'¥',
                'placement' => 'before'
            ],
            'CNY' => [
                'symbol' =>'¥',
                'placement' => 'before'
            ],
            'INR' => [
                'symbol' =>'₹',
                'placement' => 'before'
            ],
            'SGD' => [
                'symbol' =>'S$',
                'placement' => 'before'
            ],
            'HKD' => [
                'symbol' =>'HK$',
                'placement' => 'before'
            ],
            'AED' => [
                'symbol' =>'AED',
                'placement' => 'before'
            ],
            'SAR' => [
                'symbol' =>'⃁',
                'placement' => 'before'
            ],
            'SEK' => [
                'symbol' =>'kr',
                'placement' => 'after'
            ],
            'NOK' => [
                'symbol' =>'kr',
                'placement' => 'after'
            ],
            'DKK' => [
                'symbol' =>'kr.',
                'placement' => 'after'
            ],
            'MXN' => [
                'symbol' =>'Mex$',
                'placement' => 'before'
            ],
            'BRL' => [
                'symbol' =>'R$',
                'placement' => 'before'
            ],
            'PLN' => [
                'symbol' =>'zł',
                'placement' => 'after'
            ]

        ];

        // Check placement
        if($symbols[$currencyCode]['placement'] == 'before') {
            return "{$symbols[$currencyCode]['symbol']}{$monthly_budget}";
        }

        return "{$monthly_budget}{$symbols[$currencyCode]['symbol']}";
    }
}

if(!function_exists('friendlyDateFormat')) {
    function friendlyDateFormat(string $date) : string {
        $fields = ['year', 'month', 'day'];
        $formatted = array_combine($fields, explode('-', $date));

        // Change values to integers
        $formatted = array_map(fn($date) => (int) $date, $formatted);
        $dt = Carbon::createFromDate(...$formatted);

        // Create date obj
        return $dt->toFormattedDateString();
    }
}