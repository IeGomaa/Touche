<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chef extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'name',
        'description'
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
            'description' => 'required'
        ];
    }

    public function getImageAttribute($value)
    {
        return 'uploaded/chef/' . $value;
    }
}
