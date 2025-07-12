<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visite extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenoms',
        'email',
        'telephone',
        'Profession',
        'bien',
        'type',
        'date',
        'heure',
        'status',
    ];
}
