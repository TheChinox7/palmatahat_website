<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $fillable = [
        'currency_code',
        'currency_symbol',
        'phone_country_code',
        'phone_number',
        'social_links',
    ];

    protected $casts = [
        'social_links' => 'array',
    ];
}