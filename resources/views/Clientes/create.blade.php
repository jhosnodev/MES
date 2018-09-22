    <div class="modal-dialog modal-lg" role="document">

      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="scrollmodalLabel">Crear <b>Cliente</b></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('cliente.store') }}">
            {{ csrf_field() }}

            <div class="form-group">

              <label for="razon_social" class=" form-control-label">RUC y Razón Social</label>
              <div class="row form-group">

                <div class="col-md-3">
                  <select name="tipo_documento" id="tipo_documento" class="form-control form-control-lg">
                    <option value="RUC">RUC</option>
                    <option value="DNI">DNI</option>
                    <option value="CE">CE</option>
                    <option value="PASAPORTE">PASAPORTE</option>
                  </select>
                </div>
                <div class="col-md-9">
                  <input type="text" id="identificacion" placeholder="RUC/DNI/CE/PASAPORTE" class="form-control form-control-lg">
                </div>

              </div>
              

              <input type="text" id="companiia" placeholder="Razón Social" class="form-control form-control-sm">
            </div>

            <div class="form-group row">
              <div class="col-md-6">
                <label for="direccion" class="col-form-label">Dirección</label>
                <div class="">
                  <input type="text" class="form-control" placeholder="Dirección" name="direccion">
                  <input type="text" class="form-control" placeholder="Distrito" name="distrito">
                  <input type="text" class="form-control" placeholder="provincia" name="provincia">
                  <input type="text" class="form-control" placeholder="País" name="pais">
                  <input type="hidden" name="tipo_direccion" value="principal">
                </div>
                

              </div>
              <div class="col-md-6">
                <label for="" class="col-sm-2 col-form-label">Teléfono</label>
                <input type="text" class="form-control" placeholder="Télefono" name="telefono">

                <label for="" class="col-md-2 col-form-label">Email</label>
                <input type="text" class="form-control" placeholder="Email" name="email">

                <label for="" class="col-sm-2 col-form-label">Website</label>
                <input type="text" class="form-control" placeholder="Website" name="website">
                
              </div>
              
            </div>
            


            <div>
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Contacto y Direcciones</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="ventas-compras-tab" data-toggle="tab" href="#ventas-compras" role="tab" aria-controls="ventas-compras" aria-selected="false">Ventas y compras</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="facturacion-tab" data-toggle="tab" href="#facturacion" role="tab" aria-controls="facturacion" aria-selected="false">Facturación</a>
                </li>
              </ul>
              <!---->
              <!---->
              <!---->
              <div class="tab-content" id="myTabContent">

                <!---->
                <!---->
                <!---->
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <div class="row">
                    <a href="#myModal2" class="au-btn au-btn-icon au-btn--green au-btn--small text-right" id="modal-trigger-item" data-tk-labeloggle="modal"><i class="zmdi zmdi-plus"></i>Añadir
                    </a >
                  </div>
                  <div class="row">
                    <div class="card">

                    </div>
                  </div>

                </div>

                <!---->
                <!---->
                <!---->
                <div class="tab-pane fade" id="ventas-compras" role="tabpanel" aria-labelledby="ventas-compras-tab">

                 <div class="form-group row">

                  <div class="col-md-6">
                    <h5>Ventas</h5>
                    <label for="" class=""><input type="radio" value="cliente"> Es Cliente</label>
                    <div class="form-group">
                      <label for="" class=" col-form-label">Actividad Economica</label>
                    <input type="text" class="form-control" placeholder="Actividad Economica" name="website">
                    </div>
                    


                  </div>
                  <div class="col-md-6">
                    <h5>Compras</h5>
                    <label for="" class=""><input type="radio" value="proveedor"> Es Proveedor</label>
                    <div>
                      <div><h6>Bancos</h6></div>
                      <div>
                        <a href="#myModal2" class="au-btn au-btn-icon au-btn--green au-btn--small text-right" id="modal-trigger-item" data-tk-labeloggle="modal"><i class="zmdi zmdi-plus"></i>Añadir
                        </a >
                      </div>
                      <div>

                      </div>
                      <div id="banco-form">

                      </div>
                    </div>
                  </div>

                </div>

              </div>
              <!---->
              <!---->
              <!---->
              <div class="tab-pane fade" id="facturacion" role="tabpanel" aria-labelledby="facturacion-tab">
               
              <div class="form-group row">

                  <div class="col-md-6">
                    <h5>Ventas</h5>
                    <div class="form-group">
                      <label for="">Días de pago</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="">Hora de pago</label>
                      <input type="text" class="form-control">
                    </div>
                  
                    <div class="form-group">
                      <label for="">Días de Tolerancia</label>
                      <input type="number"  class="form-control">
                    </div>
                    
                      <label for="" class=" col-form-label">Ejecutivo de ventas</label>
                    <select name="ejecutivo_ventas" id="ejecutivo_ventas" class="form-control">
                      <option value="">AUTOCOMPLETAR</option>
                      <option value="">AUTOCOMPLETAR</option>
                      <option value="">AUTOCOMPLETAR</option>
                      <option value="">AUTOCOMPLETAR</option>
                      <option value="">AUTOCOMPLETAR</option>
                    </select>
                    </div>
                    


                
                  <div class="col-md-6">
                    <h5>Compras</h5>
                    <label for="" class=""><input type="radio" value="proveedor"> Es Proveedor</label>
                    <div>
                      <div><h6>Bancos</h6></div>
                      <div>
                        <a href="#myModal2" class="au-btn au-btn-icon au-btn--green au-btn--small text-right" id="modal-trigger-item" data-tk-labeloggle="modal"><i class="zmdi zmdi-plus"></i>Añadir
                        </a >
                      </div>
                        <div class="form-group">
                      <label for="">Días de crédito</label>
                      <input type="text" class="form-control">
                    </div>
                        <div class="form-group">
                      <label for="">Límite de crédito</label>
                      <input type="text" class="form-control">
                    </div>
                      <div id="banco-form">

                      </div>
                    </div>
                  </div>

                </div>

            </div>


          </div>

        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>





    @section('js')

    <script>


    </script>

    @endsection