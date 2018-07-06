 <form action="createMuestras" method="POST">
                    @csrf
                    <!-- <div id="createEmpresaForm"> -->

                    <div class="form-group">
                        <label for="rutEmpresa"></label>
                        <input type="number" placeholder="ingreses el Codigo" class="form-control" id="codigoCliente" name="codigoCliente" required>
                    </div>

                    <div class="form-group">
                        <label for="nombreEmpresa">Nombre de la empresa</label>
                        <input type="text" class="form-control" id="nombreEmpresa" name="nombreEmpresa" required>
                    </div>

                    <div class="form-group">
                        <label for="pwd">Password Empresa</label>
                        <input type="password" class="form-control" id="passwordEmpresa" name="passwordEmpresa" required>
                    </div>

                    <div class="form-group">
                        <label for="direccionEmpresa">DireccionEmpresa de la empresa</label>
                        <input type="text" class="form-control" id="rutEmpresa" name="direccionEmpresa" required>
                    </div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}" >

                    <button type="submit" class="btn btn-default">Crear Empresa</button>
                    <!-- </div> -->
                </form>