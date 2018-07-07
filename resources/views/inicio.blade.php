@extends('layouts.head')

<body>
    <div class="jumbotron text-center" style="margin-bottom:0">
        <h1>Instituto de Salud Publica de Chile (ISP)</h1>
    </div>

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Laboratorio ISP</a>
                </div>
                <ul class="nav navbar-nav" role="menu" aria-labelledby="dropdownMenu1">

                    
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @guest
                    <li><a href="/register"><span class="glyphicon glyphicon-user"></span>Registro</a></li>
                    <li><a href="/acceso"><span class="glyphicon glyphicon-log-in"></span> Acceso</a></li>
                    @else
                    <div class="dropdown">
                        <button class="btn btn-light btn-lg dropdown-toggle" type="button" data-toggle="dropdown">
                            Acceso
                            <!--<span class="caret"></span> -->
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="/showFormEmpresa">Empresas</a></li>
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
                            <li><a href="/formEmpleado">Agregar Empleado</a></li>
                            <li><a href="/showFormParticular">mantenedor 2</a></li>
                        </ul>
                    </div>
                    
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                {{ __('Info') }}
                            </a>

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


        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <br>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="https://2.wlimg.com/product_images/bc-full/dir_14/408974/laboratory-chemicals-01-1512725941_p_3506360_660907.jpeg" 
                         class="img-responsive" style="width:100%;">
                </div>

                <div class="item">
                    <img src="http://sep.edu.umh.es/wp-content/uploads/sites/1293/2017/11/materiales-para-laboratorio-3-1.jpg" 
                         alt="Equipo profesional" style="width:100%;">
                </div>

                <div class="item">
                    <img src="https://www.tierratech.com/files/sectores/galeria/13---laboratorio.jpg" 
                         alt="Responsables" style="width:100%;">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>
</body>
