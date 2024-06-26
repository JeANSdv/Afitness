<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Residency extends Model
{

    protected $table = 'residencies';

    protected $primaryKey = 'user_id';
    public $incrementing = false;

    protected $fillable = [
        'user_id',
        'country',
        'city',
        'street',
        'building',
        'flat'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

