<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{

    protected $table = "medicamentos";
    protected $fillable = ["principio_ativo","nome_comercial","cod_fabricante"];

    public function fabricante(){
        return $this->hasOne('App\Model\Fabricante');
    }
}
