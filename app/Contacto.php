<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model {

    protected $with = ['empresa'];
    protected $hidden = ['Empresa_codigoEmpresa'];

    public function contacto() {
        return $this->hasMany('App\Empresa','codigoEmpresa','Empresa_codigoEmpresa');
    }

}
