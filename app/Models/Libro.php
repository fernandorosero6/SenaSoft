<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    public function estanteria(){
        return $this->belongsTo(Estanteria::class);
    }

    public function autor(){
        return $this->belongsTo(Autor::class);
    }
}
