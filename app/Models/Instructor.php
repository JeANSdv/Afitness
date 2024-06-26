<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Instructor extends Model
{
    protected $primaryKey = 'instructor_id';
    protected $table = 'instructors';

    protected $fillable = [
        'user_id',
        'description',
        'passport'
    ];
    //связи
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
    public function reviews()
    {
        return $this->hasMany(InstructorReview::class);
    }

    // Если вы хотите использовать мутатор для поля 'passport', чтобы сохранять его в определенном формате
    public function setPassportAttribute($value)
    {
        $this->attributes['passport'] = encrypt($value);
    }

    // Если вы хотите использовать аксессор для поля 'time', чтобы всегда возвращать дату и время в определенном формате
    public function getTimeAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('Y-m-d H:i:s');
    }
}
