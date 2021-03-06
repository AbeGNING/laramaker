<?php

namespace App\Models;

use App\Models\Menu;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commande extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'menu_id'
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($commande) {
            $commande->{$commande->getKeyName()} = (string) Str::uuid();
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
    
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'foreign_key', 'other_key');
    }
}
