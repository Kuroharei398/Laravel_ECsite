<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_prefecture extends Model
{
    use HasFactory;

    protected $table = 'm_prefectures';
    protected $fillable = [
        'postage_id',
        'delivery_date_id',
        'prefecture',
    ];

    public function m_delivery_date()
    {
        return $this->belongsTo(M_Delivery_Date::class, 'delivery_date_id');
    }

    public function m_postage()
    {
        return $this->belongsTo(M_postage::class, 'postage_id');
    }
}
