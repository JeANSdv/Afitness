<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Purchase extends Model
{

    protected $table = 'purchase';

    protected $fillable = [
        'subscription_id',
        'user_id',
        'date_start',
        'date_end'
    ];

    public function subscription()
    {
        return $this->belongsTo(Subscription::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}