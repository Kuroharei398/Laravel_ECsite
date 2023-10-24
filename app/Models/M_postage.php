<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_postage extends Model
{
    use HasFactory;

    protected $table = 'm_postage';
    protected $fillable = [
        'postage',
    ];

    public function prefectures()
    {
        return $this->hasMany(M_prefectures::class, 'postage_id');
    }
}
