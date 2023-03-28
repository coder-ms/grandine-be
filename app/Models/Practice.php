<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Practice extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function generateSlug($plate)
    {
        return Str::slug($plate, '-');
    }
}