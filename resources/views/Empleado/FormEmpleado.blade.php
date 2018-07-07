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