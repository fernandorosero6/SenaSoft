<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CopiaLibro extends Model
{
    use HasFactory;

    public function estanteria(){
        return $this->belongsTo(Estanteria::class);
    }
}
