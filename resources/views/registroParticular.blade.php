<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>ISP Web Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
        <!-- <link rel="stylesheet" href="css/dataTables.bootstrap.min.css"> -->
        <link rel="stylesheet" href="css/estilos.css">
        <!-- Buttons DataTables -->
        <link rel="stylesheet" href="css/buttons.bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous">
        </script>
        <!-- Latest compiled and minified CSS -->
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
            integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
            crossorigin="anonymous"
            >

        <!-- Optional theme -->
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
            integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
            crossorigin="anonymous"
            >

        <!-- Latest compiled and minified JavaScript -->
        <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous">
        </script>

        <script src="https://unpkg.com/sweetalert2@7.19.3/dist/sweetalert2.all.js"></script>

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
                    <a class="navbar-brand" href="http://127.0.0.1:8000">Acceso a Particulares </a>
                </div>
                <ul class="nav navbar-nav" role="menu" aria-labelledby="dropdownMenu1">

                    <div class="dropdown">
                        <button class="btn btn-light btn-lg dropdown-toggle" type="button" data-toggle="dropdown">
                            Muestras
                            <!--<span class="caret"></span> -->
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="/createEmpresa">Empresas</a></li>
                            <li><a href="/registroParticulares">Particulares</a></li>
                        </ul>
                    </div>

                    <li><a href="#">page1</a></li>
                    <li><a href="#">Page 2</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/register"><span class="glyphicon glyphicon-user"></span>Registro</a></li>
                    <li><a href="/acceso"><span class="glyphicon glyphicon-log-in"></span> Acceso</a></li>
                </ul>
            </div>
        </nav>

        <div class="col-sm-6 col-md-3">
            <div class="grid_1_4">

                <form action="/createPersona">
                    @csrf
                    <!-- <div id="createEmpresaForm"> -->
                    <div class="form-group">
                        <label for="nombreEmpresa">Nombre de la Persona</label>
                        <input type="text" class="form-control" id="nombreEmpresa" name="nombreParticular" required>
                    </div>

                    <div class="form-group">
                        <label for="rutEmpresa">Rut de la Persona</label>
                        <input type="text" class="form-control" id="rutEmpresa" name="rutParticular" required>
                    </div>

                    <div class="form-group">
                        <label for="pwd">Password de la Persona</label>
                        <input type="password" class="form-control" id="passwordEmpresa" name="passwordParticular" required>
                    </div>

                    <div class="form-group">
                        <label for="direccionEmpresa">Direccion de la Persona</label>
                        <input type="text" class="form-control" id="rutEmpresa" name="direccionParticular" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="direccionEmpresa">Email de la Persona</label>
                        <input type="text" class="form-control" id="rutEmpresa" name="emailParticular" required>
                    </div>

                    <button type="submit" class="btn btn-default">Crear Persona</button>
                    <!-- </div> -->
                </form>
            </div>
        </div>

        <div class="col-sm-8 col-md-8">
            <div class="grid_1_4">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-book"></span>
                            Listado de Particulares</a></li></ul>
                <div id="resultado"></div>

            </div>
        </div>
        
        
        <script>
            function Cargar() {
                //alert("Entro a la funcion cargar");
                var xmlhttp = new XMLHttpRequest();
                var url = "/listParticular";
                xmlhttp.onreadystatechange = function () {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        var array = JSON.parse(xmlhttp.responseText);
                        var i;
                        var out = "<table border='1' class='table table-striped table-bordered' style='width:100%' >";
                        out += " <thead> <tr><th>ID</th><th>Rut</th><th>Nombre</th><th>Direccion</th>";
                        out += "<th>Email</th><th>Editar</th><th>Eliminar</th></tr><thead>";
                        for (i = 0; i < array.length; i++) {
                            out += " <tr><td>" +
                                    array[i].codigoParticular +
                                    "</td><td>" +
                                    array[i].rutParticular +
                                    "</td><td>" +
                                    array[i].nombreParticular +
                                    "</td><td>" +
                                    array[i].direccionParticular +
                                    "</td><td>" +
                                    array[i].emailParticular +
                                    "</td><td><button type='submit' class='btn btn-info'> Editar </button>" +
                                    "</td><td><button class='btn btn-info' >Eliminar </button>" +
                                    "</td></tr>";

                        }
                        out += "</table>";
                        document.getElementById("resultado").innerHTML = out;
                    }
                }
                xmlhttp.open("GET", url, true);
                xmlhttp.send();
            }
        </script>

    </body>
</html>
