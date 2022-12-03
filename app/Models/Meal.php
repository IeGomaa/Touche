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
            'name' => 'required|unique:meals,name',
            'type' => 'required'
        ];
    }

    public static function onUpdate()
    {
        return [
            'name' => 'required|unique:meals,name,' . request('id'),
            'type' => 'required',
            'id' => 'required|exists:meals,id'
        ];
    }

    public function getImageAttribute($value)
    {
        return 'uploaded/meal/' . $value;
    }
}
