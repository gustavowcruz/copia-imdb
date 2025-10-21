<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Midia;

class Categoria extends Model
{
    protected $table = 'categorias';

    protected $fillable = ['nome'];

    public function midias()
    {
        return $this->hasMany(Midia::class, 'categoria_id');
    }
}
