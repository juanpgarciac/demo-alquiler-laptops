<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leasing extends Model
{
    use HasFactory;

    protected $table = 'alquiler'; // es una vista, pero sirve a los propositos de consulta con Eloquent.
}
