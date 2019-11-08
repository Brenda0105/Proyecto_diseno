<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
<<<<<<< HEAD
=======
        'surnames',
>>>>>>> 5994ce4db8a505fc7d7106a764d48ebf0622e132
        'email',
        'password',
        'address',
        'gender',
        'birth_date',
        'client_number',
        'phone_number',
        'total_balance',
        'street',
        'suburb',
        'postal_code',
        'state',
        'city',
        'credits',
        'rfc'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
