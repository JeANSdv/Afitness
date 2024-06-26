<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Shift extends Model
{
    protected $table = 'shifts';

    protected $fillable = [
        'instructor_id',
        'time_start',
        'time_end',
        'date'
    ];

    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }
}

