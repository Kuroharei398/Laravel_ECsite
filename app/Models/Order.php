<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $fillable = [
        'order_id',
        'user_id',
        'product_id',
        'prefectures_id',
        'quantity',
        'total_price',
        'order_status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function prpduct()
    {
        return $this->belongsTo(Product::class);
    }

    public function m_prefecture()
    {
        return $this->belongsTo(M_prefecture::class , 'prefectures_id');
    }
}
