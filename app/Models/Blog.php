<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'categorie',
        'extrait',
        'message',
        'images',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
        
    }
}
