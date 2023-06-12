<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Donation extends Model
{
    use HasFactory;

    protected $fillable = ['order_id', 'amount', 'name', 'date', 'payment_type', 'bank', 'user_id', 'status', 'description', 'dontaion_type', 'photo'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}