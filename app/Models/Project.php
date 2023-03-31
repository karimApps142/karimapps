<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $guarded = [];

    function images()
    {
        return $this->hasMany(Image::class);
    }

    public function getImageAttribute($value)
    {
        $urlParts = parse_url($value);
        if (isset($urlParts['scheme']) && ($urlParts['scheme'] === 'http' || $urlParts['scheme'] === 'https')) {
            return $value;
        }
        return asset('storage/' . $value);
    }
}
