<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $fillable = ['status'];
    
    //relacion de uno a muchos inversa
public function publicacion(){
    return $this->belongsTo(Publicacion::class, 'id_publicacion');
}

}
