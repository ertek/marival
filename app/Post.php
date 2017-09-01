<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    protected $table = 'posts';
    protected $fillable = ['titulo','texto','imagen'];

    //public function Comentarios(){
    //    return $this->has_many('coments');
    //}
}
