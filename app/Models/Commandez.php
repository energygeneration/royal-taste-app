<?php

namespace App\Models;

use App\Models\commandez;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class commandez extends Model
{
    use HasFactory;


    protected $fillable = ['nom', 'telephone','Prix','color','Inscription','Date','Lieu','Heure'];
}
