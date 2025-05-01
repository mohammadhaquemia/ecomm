<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class paymenta extends Model
{
    protected $fillable = [
        'charge_id',
        'transaction_id',
        'amount',
        'card_id',
        'card_last_four',
        'card_exp_month',
        'card_exp_year',
        'postal_code',
    ];
}
