<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ator extends Model
{
    use HasFactory;
    protected $fillable = ['Nome', 'Biografia'];
    public function fichaTecnicaAtors(){
        return $this->hasMany('App\Models\FichaTecnicaAtor', 'Ator_id');
    }
}
