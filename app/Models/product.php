<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Pastikan nama tabel sesuai dengan migration
    protected $table = 'product';

    // Tentukan atribut yang bisa diisi (mass assignable)
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
    ];
}