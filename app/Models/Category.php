<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'main_categories';

    // Указываем, что поля title, description и img можно массово присваивать
    protected $fillable = ['title', 'description', 'image_path'];

    // Отключаем автоматическое добавление временных меток, если они не нужны
    public $timestamps = false;

    public function services()
    {
        return $this->hasMany(Service::class);
    }
}

