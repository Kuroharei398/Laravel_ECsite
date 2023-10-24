<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payments';
    protected $fillable = [
        'user_id',
        'card_number',
        'card_kind',
        'expiration_year',
        'expiration_month',
        'card_holder',
        'first_name',
        'last_name',
        'zip_code1',
        'zip_code2',
        'address'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
