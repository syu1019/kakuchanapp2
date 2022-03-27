<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KakutaFive extends Model
{
    use HasFactory;

    protected $table = 'kakuta_five';
    protected $primaryKey = 'id';
    protected $fillable = ['kakuta'];
}
