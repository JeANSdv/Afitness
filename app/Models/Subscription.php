<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $primaryKey = 'subscription_id';
    protected $table = 'subscription';
    protected $fillable = [
        'title',
        'description',
        'period',
        'visit_time'
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function price()
    {
        return $this->hasOne(SubPrice::class, 'subscription_id', 'subscription_id');
    }
}



