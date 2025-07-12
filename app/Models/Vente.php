<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'presentation',
        'adresse',
        'prix',
        'superficie',
        'climatisation',
        'douche',
        'cuisine',
        'balcon',
        'sonnerie',
        'alarme',
        'detecteur',
        'controle',
        'ascenseur',
        'images',
        'imag',
        'picture',
        'ima',
        'im',
        'pictur',
        'pict',
        'niveau',
        'groupe',
        'cour',
        'securite',
        'videos',
        'caution',
        'resp_images',
        'nom',
        'prenons',
        'resp_adresse',
        'configuration',
        'status',
    ];
}
