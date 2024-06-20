<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Biblioteca extends Model
{
    use HasFactory;

    public function estanterias(){
        return $this->hasMany(Estanteria::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
