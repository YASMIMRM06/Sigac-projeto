<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use App\Models\Curso;

class Nivel extends Model
{

    protected $table = 'nivels';
    protected $fillable = ['nome'];

    public function cursos(){
        return $this->hasMany(Curso::class);
    }
}
