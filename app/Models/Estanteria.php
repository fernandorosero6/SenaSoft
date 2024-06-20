<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estanteria extends Model
{
    use HasFactory;

    public function biblioteca(){
        return $this->belongsTo(Biblioteca::class);
    }

    public function libros(){
        return $this->hasMany(Libro::class);
    }

    public function CopiaLibros(){
        return $this->hasMany(CopiaLibro::class);
    }
    
}
