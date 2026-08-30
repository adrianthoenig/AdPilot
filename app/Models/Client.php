<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name',
        'industry',
        'website',
        'country',
        'city',
        'logo_path',
        'primary_contact_name',
        'email',
        'phone',
        'job_title',
        'status',
        'start_date',
        'currency',
        'monthly_budget'
    ];
}
