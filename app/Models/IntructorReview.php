<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class InstructorReview extends Model
{


    protected $table = 'instructor_reviews';

    protected $fillable = [
        'instructor_id',
        'review',
        'rating',
        'time',
        'user_id'
    ];

    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Если вы хотите использовать аксессор для поля 'time', чтобы всегда возвращать дату и время в определенном формате
    public function getTimeAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('Y-m-d H:i:s');
    }
}

