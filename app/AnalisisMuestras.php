<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnalisisMuestras extends Model {

    protected $with = ['Empresa'];
    protected $hidden = ['codigoEmpresa'];

    public function Empresa() {
        return $this->hasOne('App\Empresa', 'empresa_codigoempresa', 'codigoEmpresa');
    }
    
    
    protected $with1 = ['Particular'];
    protected $hidden1 = ['codigoParticular'];
    
    public function Particular() {
        return $this->hasOne('App\Particular', 'Particular_codigoParticular', 'codigoParticular');
    }
    
    protected $with2 = ['Empleado'];
    protected $hidden2 = ['rutEmpleado'];
    
    public function Empleado() {
        return $this->hasOne('App\Particular', 'rutEmpleadoRecibe', 'rutEmpleado');
    }

}
