<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Remetente extends Model
{
    protected $fillable = [
        'remetente',
        'telefone_remetente',
        'endereco_remetente',
    ];
}
