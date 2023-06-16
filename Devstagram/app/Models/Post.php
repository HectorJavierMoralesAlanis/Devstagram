<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //Forzar el nombre de la tabla Post en singular
    protected $table = "post";

    //Protegemos la informacion par aguardarla en la BD
    protected $fillable=[
        'titulo',
        'descripcion',
        'imagen',
        'user_id'
    ];

    //Creamos la relacion de un Post pertenece a un User(relacion inversa)
    public function user(){
        return $this->belongsTo(User::class)->selected(['name','username']);
    }
}
