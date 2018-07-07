<html>
    <head>
    @extends('layouts.head')
    </head>
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
                            <!--<span class="caret"></span> -->
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="/createEmpresa">Empresas</a></li>
                            <li><a href="/showFormParticular">Particulares</a></li>
                        </ul>
                    </div>

                    <li><a href="formMuestras">Ingreso Muestras</a></li>
                    <li><a href="Mantenedores">Mantenedores</a></li>
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

        <div class="col-sm-6 col-md-3">
            <div class="grid_1_4">

                <form action="createContacto" method="POST">
                    @csrf
                    <!-- <div id="createEmpresaForm"> -->
                    
                    <div class="form-group">
                        <label for="Empresa_codigoEmpresa">Codigo a la empresa que pertenece</label>
                        <input type="text" class="form-control" id="Empresa_codigoEmpresa" name="Empresa_codigoEmpresa" required>
                    </div>

                    <div class="form-group">
                        <label for="rutContacto">Rut del Contacto</label>
                        <input type="text" class="form-control" id="rutContacto" name="rutContacto" required>
                    </div>

                    <div class="form-group">
                        <label for="nombreContacto">Nombre del Contacto</label>
                        <input type="text" class="form-control" id="nombreContacto" name="nombreContacto" required>
                    </div>

                    <div class="form-group">
                        <label for="emailContacto">Email Contacto</label>
                        <input type="email" class="form-control" id="emailContacto" name="emailContacto" required>
                    </div>

                    <div class="form-group">
                        <label for="telefonoContacto">Telefono Contacto</label>
                        <input type="text" class="form-control" id="telefonoContacto" name="telefonoContacto" required>
                    </div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}" >

                    <button type="submit" class="btn btn-default">Crear Contacto</button>
                    <!-- </div> -->
                </form>
            </div>
        </div>
        
        <div class="col-sm-8 col-md-8" onload="Cargar();">
            <div class="grid_1_4">
                <ul class="nav navbar-nav navbar-right"></ul>
                <div id="resultado"></div>

            </div>
        </div>
       
        <script>
            function Cargar() {
                //alert("Entro a la funcion cargar");
                var xmlhttp = new XMLHttpRequest();
                var url = "/listContactos";
                xmlhttp.onreadystatechange = function () {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        var array = JSON.parse(xmlhttp.responseText);
                        var i;
                        var out = "<table border='1' class='table table-striped table-bordered' style='width:100%' >";
                        out += " <thead> <tr><th>ID</th><th>Rut</th><th>Direccion</th>";
                        out += "<th>Editar</th><th>Eliminar</th></tr><thead>";
                        for (i = 0; i < array.length; i++) {
                            out += " <tr><td>" +
                                    array[i].rutContacto +
                                    "</td><td>" +
                                    array[i].nombreContacto +
                                    "</td><td>" +
                                    array[i].emailContacto +
                                    "</td><td>" +
                                    array[i].telefonoContacto +
                                    "</td><td>"+
                                    array[i].Empresa_codigoEmpresa+
                                    "</td><td><button type='submit' class='btn btn-info'> Editar </button>" +
                                    "</td><td><button class='btn btn-info' >Eliminar </button>" +
                                    "</td></tr>";

                        }
                        out += "</table>";
                        document.getElementById("#resultado").innerHTML = out;
                    }
                }
                xmlhttp.open("GET", url, true);
                xmlhttp.send();
            }
        </script>
    </body>
</html>