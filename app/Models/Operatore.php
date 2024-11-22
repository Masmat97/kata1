<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operatore extends Model
{
    /** @use HasFactory<\Database\Factories\OperatoreFactory> */
    use HasFactory;

    protected $fillable = ['nome', 'email', 'telefono', 'stato'];
}
