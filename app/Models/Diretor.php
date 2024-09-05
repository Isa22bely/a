<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diretor extends Model
{
    use HasFactory;
    protected $fillable =  ['Nome', 'Biografia'];
    public function fichaTecnicaDiretors(){
      return $this->hasMany('App\Models\FichaTecnicaDiretor', 'Diretor_id');
    }
}
