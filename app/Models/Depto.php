<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depto extends Model
{
    use HasFactory;

    public function carreras():HasMany{
        return $this->hasMany(Carrera::class);
    }
}
