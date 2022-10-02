<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    protected $fillable = [
        'control_number', 'name', 'first_name', 'last_name', 'middle_name', 'building', 'purok', 'barangay', 'owenership', 'status', 'employees_male', 'employees_female',
        'daily_or_annual', 'amount', 'ownership', 'account_number', 'products_services', 'included_products', 'floor', 'stall_number', 'waypoint',
        'image_count', 'date_established', 'gross_sales', 'interviewee', 'date_interviewed', 'description'
    ];    
}
