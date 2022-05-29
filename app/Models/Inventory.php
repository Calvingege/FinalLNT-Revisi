<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// model ada 2 : Model inventory
class Inventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'Kategori',
        'NamaBarang',
        'HargaBarang',
        'JumlahBarang',
        'FotoBarang'
    ];
}
