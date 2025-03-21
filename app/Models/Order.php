<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['full_name', 'status', 'comment', 'product_id'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
