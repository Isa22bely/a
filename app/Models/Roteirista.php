<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roteirista extends Model
{
    use HasFactory;
    protected $fillable =  ['Nome', 'Biografia'];
    public function fichaTecnicaRoteiristas(){
      return $this->hasMany('App\Models\FichaTecnicaRoteirista', 'Roteirista_id');
    }
}
