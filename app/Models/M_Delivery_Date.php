<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_Delivery_Date extends Model
{
    use HasFactory;

    protected $table = 'm_delivery_date';
    protected $fillable = [
        'delivery_date',
    ];
}
