<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'pais',
        'provincia',
        'latitude',
        'longitude'
    ];
   protected $table = 'pessoas';
   protected $primaryKey = 'id';
   public $timestamps = false;
}
