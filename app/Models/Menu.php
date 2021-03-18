<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'titre',
        'description',
        'ingredients',
        'prix',
        'image',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($menu) {
            $menu->{$menu->getKeyName()} = (string) Str::uuid();
        });
    }

    public function getIncrementing()
    {
        return false;
    }

    public function getKeyType()
    {
        return 'string';
    }
}
