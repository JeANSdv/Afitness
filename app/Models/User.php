<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $primaryKey = 'user_id';

    protected $attributes = [
        'role_id' => 1,
        'avatar_path' => 'some standart avatar',
    ];

    protected $fillable = [
        'name',
        'second_name',
        'third_name',
        'email',
        'password',
        'sex',
        'phone_number',
        'birth_date',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
    public function instructorReviews()
    {
        return $this->hasMany(InstructorReview::class);
    }
    public function purchases()
    {
        return $this->hasMany(Purchase::class, 'user_id');
    }
}
