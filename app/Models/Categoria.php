<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Categoria extends Model
{
    use HasFactory,Notifiable;
    protected $table = "categorias";
    protected $guarded = ['id'];
    //----------------------------------------------------------------------------------
    public function propuestas()
    {
        return $this->hasMany(Propuesta::class, 'categoria_id', 'id');
    }
    //----------------------------------------------------------------------------------
}
