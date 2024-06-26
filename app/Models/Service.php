<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'service';

    protected $fillable = ['category_id', 'title', 'description', 'image_path'];

    // Связь 'один ко многим' с моделью Category
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');

    }
    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }
}
