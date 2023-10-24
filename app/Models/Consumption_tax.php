<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consumption_tax extends Model
{
    use HasFactory;

    protected $table = 'consumption_tax';
    protected $fillable = [
        'consumption_tax',
    ];
}
