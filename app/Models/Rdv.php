<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rdv extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'telephone',
        'type',
        'email',
        'date',
        'heure',
        'message',
    ];
    public static function getEmails()
    {
        return self::pluck('email')->toArray();
    }
}
