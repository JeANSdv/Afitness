<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class SubPrice extends Model
{

    protected $table = 'sub_price';
    protected $fillable = ['subscription_id', 'price'];

    public function subscription(): BelongsTo
    {
        return $this->belongsTo(Subscription::class);
    }
}

