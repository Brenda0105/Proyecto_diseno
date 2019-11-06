<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CreditRequest extends Model
{
    protected $table = 'credit_requests';

    protected $fillable = [
        'first_name',
        'second_name',
        'first_surname',
        'second_surname',
        'birth_date',
        'phone_number',
        'home_phone',
        'email',
        'rfc'
    ];
}
