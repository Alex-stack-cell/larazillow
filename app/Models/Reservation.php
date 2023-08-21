<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'number_of_people',
        'reservation_date',
        'reservation_hour',
        'is_company',
        'company_name',
        'vat_number',
        'first_name',
        'name',
        'special_needs'
    ];


}
