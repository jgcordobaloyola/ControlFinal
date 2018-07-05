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
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Editar Empresa </a>
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
                @extends('layouts.inicio')

                @section('content')


                <div class="">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Listado de empresas</h3>
                        </div>

                        <div class="box-body">
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Rut</th>
                                        <th>Nombre</th>
                                        <th>Password</th>
                                        <th>Direccion</th>
                                    </tr>

                                </thead>

                                <tbody>

                                    @foreach($categories as $cat)
                                    <tr>
                                        <td>{{$cat->title}}</td>
                                        <td>{{$cat->description}}</td>
                                        <td>
                                            <button class="btn btn-info" data-mytitle="{{$cat->title}}" data-mydescription="{{$cat->description}}" data-catid={{$cat->id}} data-toggle="modal" data-target="#edit">Edit</button>
                                            /
                                            <button class="btn btn-danger" data-catid={{$cat->id}} data-toggle="modal" data-target="#delete">Delete</button>
                                        </td>
                                    </tr>

                                    @endforeach
                                </tbody>


                            </table>				
                        </div>
                    </div>
                </div>



                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    Add New
                </button>

                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">New Category</h4>
                            </div>
                            <form action="{{route('category.store')}}" method="post">
                                {{csrf_field()}}
                                <div class="modal-body">
                                    @include('category.form')
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" 
                                        aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Edit Category</h4>
                            </div>
                            <form action="{{route('category.update','test')}}" method="post">
                                {{method_field('patch')}}
                                {{csrf_field()}}
                                <div class="modal-body">
                                    <input type="hidden" name="category_id" id="cat_id" value="">
                                    @include('category.form')
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
                            </div>
                            <form action="{{route('category.destroy','test')}}" method="post">
                                {{method_field('delete')}}
                                {{csrf_field()}}
                                <div class="modal-body">
                                    <p class="text-center">
                                        Are you sure you want to delete this?
                                    </p>
                                    <input type="hidden" name="category_id" id="cat_id" value="">

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
                                    <button type="submit" class="btn btn-warning">Yes, Delete</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


                @endsection

            </div>
        </div>

        <div class="col-sm-6 col-md-3">
            <div class="grid_1_4">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/listEmpresas"><span class="glyphicon glyphicon-book"></span>
                            Ver el listado de Empresas</a></li>
                </ul>
            </div>
        </div>




    </body>
</html>
