@csrf
<div class="jumbotron text-center" style="margin-bottom:0">
    <h1>Instituto de Salud Publica de Chile (ISP)</h1>
    <p></p> 
</div>

<!-- aqui parte el navBar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Laboratorio ISP</a>
        </div>
        <ul class="nav navbar-nav" role="menu" aria-labelledby="dropdownMenu1">

            <div class="dropdown">
                <button class="btn btn-light btn-lg dropdown-toggle" type="button" data-toggle="dropdown">
                    Registro
                    <!--<span class="caret"></span> -->
                </button>
                <ul class="dropdown-menu">
                    <li><a href="/showFormEmpresa">Empresas</a></li>
                    <li><a href="/showFormParticular">Particulares</a></li>
                </ul>
            </div>

            <li><a href="formMuestras">Ingreso Muestras</a></li>
            <li><a href="Mantenedores">mantenedores</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            @guest
            <li><a href="/register"><span class="glyphicon glyphicon-user"></span>Registro</a></li>
            <li><a href="/acceso"><span class="glyphicon glyphicon-log-in"></span> Acceso</a></li>
            @else
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