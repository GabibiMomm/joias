<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;

class Joia extends Model
{
    use HasFactory;

    public function categoriad(){
        return $this->belongsTo(Categoria::class,'categoria');
    }
}
