<!DOCTYPE html>
<html lang="es">
    <head>
        @extends('layouts.head')

    </head>
    <body class="text-dark" onload="Cargar();"> 
        <div class="row fondo">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <h1 class="text-center text-uppercase">Laboratorio ISP</h1>
            </div>
        </div>
        <br>
        <!-- aqui parte el navBar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Acceso a Empresas </a>
                </div>
                <ul class="nav navbar-nav" role="menu" aria-labelledby="dropdownMenu1">

                    <div class="dropdown">
                        <button class="btn btn-light btn-lg dropdown-toggle" type="button" data-toggle="dropdown">
                            Muestras
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="/createEmpresa">Empresas</a></li>
                            <li><a href="/showFormParticular">Particulares</a></li>
                        </ul>
                    </div>

                    <div class="dropdown">
                        <button class="btn btn-light btn-lg dropdown-toggle" type="button" data-toggle="dropdown">
                            Ingreso Muestras
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="/createEmpresa">Muestra 1</a></li>
                            <li><a href="/showFormParticular">Muestra 2</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-light btn-lg dropdown-toggle" type="button" data-toggle="dropdown">
                            Mantenedores
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="/createEmpresa">Mantenerdor 1</a></li>
                            <li><a href="/showFormParticular">mantenedor 2</a></li>
                        </ul>
                    </div>

                </ul>
                @csrf
                <!--- registro --->
                <ul class="nav navbar-nav navbar-right" <!--class="navbar-nav ml-auto" --> 
                    <!-- Authentication Links -->
                    @guest
                    <li><a href="/register"><span class="glyphicon glyphicon-user"></span>Registro </a></li>
                    <li><a href="/acceso"><span class="glyphicon glyphicon-log-in"></span> Acceso</a></li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Entrar al sistema') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                    </li> -->
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>


            </div>
        </nav>

        <div class="col-sm-3 col-md-9">
            <div class="grid_1_4">

                <form action="storeAnalisis" method="POST">
                    @csrf
                    <!-- <div id="createEmpresaForm"> -->

                    <div class="form-group">
                        <label for="codigoCliente">Codigo Particular</label>
                        <input type="number" class="form-control" id="codigoCliente" name="codigoCliente" required>
                    </div>

                    <div class="form-group">
                        <label for="rutEmpleadoRecibe">Rut Encargado</label>
                        <input type="text" class="form-control" id="rutEmpleadoRecibe" name="rutEmpleadoRecibe" required>
                    </div>

                    <div class="form-group">
                        <label for="cantidadMuestra">Cantidad de Muestra</label>
                        <input type="number" class="form-control" id="cantidadMuestra" name="cantidadMuestra" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="empresa_codigoempresa">Codigo de la empresa a la cual pertenece el particular</label>
                        <input type="number" class="form-control" id="empresa_codigoempresa" name="empresa_codigoempresa" required>
                    </div>

                    <div class="form-group">
                        <label for="nombreCliente">Nombre Cliente</label>
                        <input type="text" class="form-control" id="nombreCliente" name="nombreCliente" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="fechaRecepcion">Fecha Recepcion</label>
                        <input type="date" class="form-control" id="fechaRecepcion" name="fechaRecepcion" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="temperaturaMuestra">Temperatura Muestra</label>
                        <input type="number" class="form-control" id="temperaturaMuestra" name="temperaturaMuestra" required>
                    </div>
                    
                    <div class="checkbox form-group">
                        <label for="nombreCliente">Tipo de Analisis | deteccion de:</label>
                        <br>
                        <label><input type="checkbox" id="1" value="1">MicroToxinas (Producidas por hongos)</label>
                    </div>
                    <div class="checkbox form-group">
                        <label><input type="checkbox" value="2">Metales pesados</label>
                    </div>
                    <div class="checkbox form-group">
                        <label><input type="checkbox" value="">Plaguicidas Prohibivos</label>
                    </div>
                    
                    <div class="checkbox form-group">
                        <label><input type="checkbox" value="">Marea Roja</label>
                    </div>
                    <div class="checkbox form-group">
                        <label><input type="checkbox" value="">Bacterias Nocivas</label>
                    </div>
                    
                    <input type="hidden" name="_token" value="{{csrf_token()}}" >

                    <button type="submit" class="btn btn-light btn-lg" type="button" >Guardar Analisis</button>
                    <a href="/" class="btn btn-light btn-lg" type="button" >Salir</a>
                    <!-- </div> -->
                </form>
            </div>
        </div>

    </body>
</html>
