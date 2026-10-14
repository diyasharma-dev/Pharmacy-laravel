<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrescriptionTransfer extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'dob',
        'phone',
        'email',
        'address',
        'current_pharmacy_name',
        'current_pharmacy_phone',
        'medications_or_rx_numbers',
        'doctor_name',
        'insurance_name',
        'special_notes',
        'status',
    ];
}
