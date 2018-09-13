@extends('layouts.app')

@section('company', 'BF Global')
@section('title', 'Cliente')

@section('content')


<div class="card col-md-12">
  <div class="card-header"><strong>Cliente</strong> Nuevo</div>
  <div class="card-body">
    <form action="{{route('cliente.store')}}">
      {{ csrf_field() }}
      <div class="row form-group">
        <div class="">
          <label class=" form-control-label">Persona</label>
        </div>
        <div class="">
          <div class="form-check-inline form-check">
            <label for="inline-radio1" class="form-check-label ">
              <input type="radio" id="inline-radio1" name="inline-radios" value="natural" class="form-check-input">Natural
            </label>
            <label for="inline-radio2" class="form-check-label ">
              <input type="radio" id="inline-radio2" name="inline-radios" value="juridica" class="form-check-input">Jurídica
            </label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for=""></label>
        <input type="text" placeholder="Razón Social" name="razon_social" class="form-control">
      </div>
      <div class="row">
        <div class="col col-md-2">
            <label for="">RUC</label>
        </div>

        <div class="col col-md-4">
          <fieldset>
        <p><input class="form-control" placeholder="Identificación" oninput="this.className = ''" name="identificacion" tabindex="14"></p>
        
        
      </fieldset>
        </div>
        
      </div> 
      <div class="row">
        <div class="col col-md-2">
            <label for="">Dirección</label>
        </div>

        <div class="col col-md-4">
          <fieldset>
        <p><input class="form-control" placeholder="Dirección" oninput="this.className = ''" name="direccion" tabindex="14"></p>
        <p><input class="form-control" placeholder="Distrito" oninput="this.className = ''" name="distrito" tabindex="15"></p>
        <p><input class="form-control" placeholder="Provincia" oninput="this.className = ''" name="provincia" tabindex="16"></p>
        <p><input class="form-control" placeholder="País" oninput="this.className = ''" name="pais" tabindex="17"></p>
        <p><input class="form-control" placeholder="Teléfono" oninput="this.className = ''" name="telefono" tabindex="18"></p>
        
      </fieldset>
        </div>
        
        <div class="col col-md-2">
            <label for="">Dirección</label>
        </div>

        <div class="col col-md-4">
          <fieldset>
        <p><input class="form-control" placeholder="Dirección" oninput="this.className = ''" name="direccion" tabindex="14"></p>
        <p><input class="form-control" placeholder="Distrito" oninput="this.className = ''" name="distrito" tabindex="15"></p>
        <p><input class="form-control" placeholder="Provincia" oninput="this.className = ''" name="provincia" tabindex="16"></p>
        <p><input class="form-control" placeholder="País" oninput="this.className = ''" name="pais" tabindex="17"></p>
        <p><input class="form-control" placeholder="Teléfono" oninput="this.className = ''" name="telefono" tabindex="18"></p>
        
      </fieldset>
        </div>
        
      </div>

     
      <div>

         {{-- Pestañas --}}
      {{-- Pestañas --}}
      {{-- Pestañas --}}
      {{-- Pestañas --}}
      {{-- Pestañas --}}
      {{-- Pestañas --}}
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-contacto-tab" data-toggle="pill" href="#pills-contacto" role="tab" aria-controls="pills-contacto" aria-selected="true">Contactos y Direcciones</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-notas-tab" data-toggle="pill" href="#pills-notas" role="tab" aria-controls="pills-notas" aria-selected="false">Notas internas</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-historico-tab" data-toggle="pill" href="#pills-historico" role="tab" aria-controls="pills-historico" aria-selected="false">Ventas y compras</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-facturacion-tab" data-toggle="pill" href="#pills-facturacion" role="tab" aria-controls="pills-facturacion" aria-selected="false">Facturación</a>
  </li>
</ul>

 {{-- Pestañas contenido --}}
      
      
      
      
      {{-- Pestañas contenido contacto --}}
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-contacto" role="tabpanel" aria-labelledby="pills-contacto-tab">


    <a href="#" id="create-trigger" class="au-btn au-btn-icon au-btn--green au-btn--small text-right add-modal add-modal">
            <i class="zmdi zmdi-plus"></i>Agregar Elemento
        </a >
<button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#scrollmodal">
                      Scrolling
                    </button>


      </div>


{{-- Pestañas contenido notas --}}
  <div class="tab-pane fade" id="pills-notas" role="tabpanel" aria-labelledby="pills-notas-tab">...</div>

{{-- Pestañas contenido historico --}}

  <div class="tab-pane fade" id="pills-historico" role="tabpanel" aria-labelledby="pills-historico-tab">...</div>

{{-- Pestañas contenido facturacion--}}

  <div class="tab-pane fade" id="pills-facturacion" role="tabpanel" aria-labelledby="pills-facturacion-tab">...</div>
</div>
      </div>
    </form>

    <form id="regForm" action="{{route('cliente.store')}}" method="POST">
      
      <!-- One "tab" for each step in the form: -->
      <div class="tab">Datos:
        <fieldset>
          <p><input placeholder="RUC" oninput="this.className = ''" onchange="consultaSunat()" name="identificacion" class="form-control" tabindex="1"></p>
          <p><input placeholder="Nombre o razón Social" oninput="this.className = ''" name="razon_social" class="form-control" tabindex="2"></p>
          <p><input placeholder="Website" oninput="this.className = ''" name="website" class="form-control" tabindex="2"></p>
          <p><select placeholder="Ejecutivo de Ventas" oninput="this.className = ''" name="ejecutivo_ventas_id" class="form-control" tabindex="3">
            <option value="">Ejecutivo de ventas</option>
            <option value="1">Juan Jimenez</option>
            <option value="2">María Parras</option>
            <option value="3">Lidia Martinez</option>
          </select>
        </p>
        <p><select placeholder="Actividad Económica" oninput="this.className = ''" name="actividad_economica_id" class="form-control" tabindex="3">
          <option value="">Actividad Económica</option>
          <option value="Actividad económica 1">Actividad económica 1</option>
          <option value="Actividad económica 2">Actividad económica 2</option>
          <option value="Actividad económica 3">Actividad económica 3</option>
        </select>
      </p>
      <p><input placeholder="Grupo" oninput="this.className = ''" name="grupo" class="form-control" tabindex="4"></p>
      <p><input placeholder="Estado" oninput="this.className = ''" name="estado" class="form-control" tabindex="4"></p>
    </fieldset>
  </div>
  <div class="tab">Contacto:
    <fieldset>
      <p><input class="form-control" placeholder="Nombre del Contacto" oninput="this.className = ''" name="persona" tabindex="5"></p>
      <p><input class="form-control" placeholder="Correo" oninput="this.className = ''" name="correo" tabindex="6" type="email"></p>
      <p><input class="form-control" placeholder="Teléfono" oninput="this.className = ''" name="telefono" tabindex="7" type="tel"></p>
      <p><input class="form-control" placeholder="Cedúla" oninput="this.className = ''" name="cedula" tabindex="8"></p>
      <p><select name="dia_pago" id="dia_pago" class="form-control" placeholder="Día de Pago" oninput="this.className = ''"  tabindex="9">
        <option value="">Día de Pago</option>
        <option value="LUNES">Lunes</option>
        <option value="MARTES">Martes</option>
        <option value="MIÉRCOLES">Miércoles</option>
        <option value="JUEVES">Jueves</option>
        <option value="VIERNES">Viernes</option>
      </select></p>
      <p><select name="dia_credito" id="dia_credito" class="form-control" placeholder="Día de Crédito" oninput="this.className = ''"  tabindex="9">
        <option value="">Día de Crédito</option>
        <option value="LUNES">Lunes</option>
        <option value="MARTES">Martes</option>
        <option value="MIÉRCOLES">Miércoles</option>
        <option value="JUEVES">Jueves</option>
        <option value="VIERNES">Viernes</option>
      </select></p>
      <p><input class="form-control" placeholder="Hora de Pago" oninput="this.className = ''" name="hora_pago" tabindex="10" type="time"></p>
      <p><input class="form-control" placeholder="límite de crédito" oninput="this.className = ''" name="limite_credito" tabindex="10" type="number"></p>
      <p><input class="form-control" placeholder="Cargo" oninput="this.className = ''" name="cargo" tabindex="11"></p>
      <p><select name="dia_tolerancia" id="dia_tolerancia" class="form-control" placeholder="Día de Tolerancia" oninput="this.className = ''"  tabindex="9">
        <option value="">Día de Tolerancia</option>
        <option value="LUNES">Lunes</option>
        <option value="MARTES">Martes</option>
        <option value="MIÉRCOLES">Miércoles</option>
        <option value="JUEVES">Jueves</option>
        <option value="VIERNES">Viernes</option>
      </select></p>

      <p><textarea name="observaciones" id="observaciones" cols="30" rows="2" class="form-control" placeholder="observaciones" tabindex="13" oninput="this.className = ''"></textarea>

      </fieldset>
    </div>
    <div class="tab">Sucursal:
      <fieldset>
        <p><input class="form-control" placeholder="Dirección" oninput="this.className = ''" name="direccion" tabindex="14"></p>
        <p><input class="form-control" placeholder="Distrito" oninput="this.className = ''" name="distrito" tabindex="15"></p>
        <p><input class="form-control" placeholder="Provincia" oninput="this.className = ''" name="provincia" tabindex="16"></p>
        <p><input class="form-control" placeholder="País" oninput="this.className = ''" name="pais" tabindex="17"></p>
        <p><input class="form-control" placeholder="Teléfono" oninput="this.className = ''" name="telefono" tabindex="18"></p>
        <p><label for="principal">¿Es la sucursal Principal?
          <input value="1" oninput="this.className = ''" name="principal" type="checkbox"></label>
        </p>
      </fieldset>
    </div>

    <div style="overflow:auto;">
      <div style="float:right;">
        <button type="button" id="prevBtn" class="button1" onclick="nextPrev(-1)">Anterior</button>
        <button type="button" id="nextBtn" class="button1" onclick="nextPrev(1)">Siguiente</button>
      </div>
    </div>
    <!-- Circles which indicates the steps of the form: -->
    <div style="text-align:center;margin-top:40px;">
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>

    </div>
  </form>
</div>
</div>


<!-- Modal form to add a post -->
    <div id="addModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="title">Title:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="title_add" autofocus>
                                <small>Min: 2, Max: 32, only text</small>
                                <p class="errorTitle text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="content">Content:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="content_add" cols="40" rows="5"></textarea>
                                <small>Min: 2, Max: 128, only text</small>
                                <p class="errorContent text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success add" data-dismiss="modal">
                            <span id="" class=''></span> Agregar
                        </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class=''></span> Cerrar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
      <!-- modal scroll -->
      
        
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="scrollmodalLabel">Scrolling Long Content Modal</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>
                dasdasd
              </p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-primary">Confirm</button>
            </div>
          </div>
        
      
      <!-- end modal scroll -->

      @endsection
@section('js')
<script>
      $('#new-trigger').on('click', function (event) {
          var button = $(event.relatedTarget); // Button that triggered the modal


          $.ajax({
            url: '{{url('elementos/create')}}',
            method:'GET',
            data:{},
            success:function(data)
          {
            $('#all-modal').html(data).modal('show');
             
            $('#canc').on('click', function (event) { $('.evento').html(''); });
          },
          error:function(data){
            console.log(data);
          }
      });
        });
$('#canc').click(function(){
    $('all-modal').modal('hide');
})
function paraEdit(id)
{

          $.ajax({
            url: '{{url('elementos')}}/'+id+'/edit',
            method:'GET',
            data:{},
            success:function(data)
          {
            $('#all-modal').html(data).modal('show');
            $('#canc').on('click', function (event) {   $('.evento').html(''); });
              
          },
          error:function(data){
            console.log(data);
          }
      });
}     
function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function consultaSunat(){
  var val = $('[name=identificacion]').val();
  if(val.trim!='')
    $.get('{{url('api/sunat')}}?identificacion='+val,function(data)
    {        

      if(data.success)
      {
        $('[name=razon_social]').val(data.entity.nombre_o_razon_social);
        $('[name=estado]').val(data.entity.estado_del_contribuyente);
        $('[name=telefono]').val(data.entity.numero_telefono);
        $('[name=provincia]').val(data.entity.provincia);
        $('[name=distrito]').val(data.entity.distrito);
        $('[name=direccion]').val(data.entity.direccion_completa);
      }
      else
      {

       alert(data.error);


     }
   });


}
</script>



@endsection




