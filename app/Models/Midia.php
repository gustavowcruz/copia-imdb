<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Midia extends Model
{
    protected $table = 'midias';

    protected $fillable = ['ano', 'titulo', 'categoria_id'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }
}
