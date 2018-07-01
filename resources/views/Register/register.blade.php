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
    <body class="text-dark"> 
        <div class="row fondo">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <h1 class="text-center text-uppercase">Laboratorio ISP</h1>
            </div>
        </div>
        <br>

        <!-- aqui parte el navBar -->

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="../acceso">Registrarse |</a>
        </nav>

        <div class="p-3 mb-2 bg-light text-dark">
            <div class="container">
            <form class="form-horizontal" role="form">
                <h2>Formulario de Registro</h2>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Nombre Completo</label>
                    <div class="col-sm-9">
                        <input type="text" id="firstName" placeholder="Nombre Completo" class="form-control" autofocus>
                        <span class="help-block">nombre, apellido paterno y materno, ej.: Luis Azocar Ortuzar</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" id="email" placeholder="Email" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" id="password" placeholder="Password" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3">Gender</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="femaleRadio" value="Female">Female
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="maleRadio" value="Male">Male
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="uncknownRadio" value="Unknown">Unknown
                                </label>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <label class="control-label col-sm-3">Meal Preference</label>
                    <div class="col-sm-9">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="calorieCheckbox" value="Low calorie">Low calorie
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="saltCheckbox" value="Low salt">Low salt
                            </label>
                        </div>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">I accept <a href="#">terms</a>
                            </label>
                        </div>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                </div>
            </form> <!-- /form -->
        </div> <!-- ./container -->
        </div>

        <!-- scripting -->
        <script type="text/javascript">
                $(document).ready(function () {
                    $("#signupbtn").click(function (event) {
                        var body = {
                            'email': $("input[name='email']").val(),
                            'password': $("input[name='password']").val(),
                        }
                        $.post("../", body, function (a, b, c) {
                            swal(
                                    'Excelente!',
                                    'Usuario Creado!',
                                    'success'
                                    )
                        }).fail(function (resp, error, responseType) {
                            swal({
                                type: 'error',
                                title: responseType,
                                text: resp['responseText'],
                            })
                        });
                        //event.preventDefault();
                    })
                })
        </script>

    </body>
</html>
