<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;


    protected $fillable = [
        'company_title',
        'company_meta_title',
        'mobile_no',
        'email',
        'domain',
        'url',
        'company_type',
        'meta_desc',
        'address',
    ];

    protected static function boot() {
        parent::boot();

        static::creating(function($company){
            $company->company_meta_title = str_replace(' ', '_', $company->company_title);
        });

        static::updating(function($company){
            $company->company_meta_title = str_replace(' ', '_', $company->company_title);
        });
    }
    
}

