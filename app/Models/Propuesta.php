<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Propuesta extends Model
{
    use HasFactory,Notifiable;
    protected $table = "propuestas";
    protected $guarded = ['id'];
    //----------------------------------------------------------------------------------
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id', 'id');
    }
    //----------------------------------------------------------------------------------
}
