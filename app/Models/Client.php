<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    use HasFactory;
    
    protected $fillable = [
        'name',
        'industry',
        'website',
        'country',
        'city',
        'logo_path',
        'contact_name',
        'email',
        'phone',
        'job_title',
        'client_status',
        'start_date',
        'currency',
        'monthly_budget',
        'advertising_platforms'
    ];
}
