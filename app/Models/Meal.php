<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'type'
    ];

    public static function imageRequired()
    {
        return [
            'image' => 'required'
        ];
    }

    public static function onCreate()
    {
        return [
            'name' => 'required',
            'type' => 'required'
        ];
    }

    public function getImageAttribute($value)
    {
        return 'uploaded/meal/' . $value;
    }
}
