<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    use HasFactory;
    //relacion de muchos a muchos
    public function users()
    {
        return $this->belongsToMany(User::class, 'interesados');
    }

    //relacion de uno a muchos
    public function status(){
        return $this->hasOne(Status::class, 'id_publicacion');
    }

}
