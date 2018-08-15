@extends('layouts.app')

@section('company', 'BF Global')
@section('title', 'Gestión de Materiales')

@section('content')


<div class="card col-md-12">
  <div class="card-header"><strong>Artículo</strong> Nuevo</div>
  <div class="card-body">
    <form id="regForm" action="{{route('item.store')}}" method="POST">
      {{ csrf_field() }}
      <!-- One "tab" for each step in the form: -->
      <div class="tab">Descripción:
        <fieldset>
          <p><input placeholder="Código" oninput="this.className = ''" name="codigo" class="form-control" readonly="readonly"></p>
          <p><select placeholder="Tipo" oninput="this.className = ''" name="tipo" class="form-control" tabindex="1" >
            <option value="">Tipo de Artículo</option>
            <option value="ITEM">Ítem</option>
            <option value="COMPUESTO">Ítem compuesto</option>
            <option value="SERVICIO">Servicio</option>
          </select>
        </p>  
        <p><input placeholder="Línea de Negocio" oninput="this.className = ''" onchange="codigoGenerate()" name="linea_negocio" class="form-control" tabindex="2"></p>
        <p><input placeholder="Marca" oninput="this.className = ''" name="marca" class="form-control" tabindex="3" onchange="codigoGenerate()"></p>
        <p><input placeholder="Familia" oninput="this.className = ''" name="familia" class="form-control" tabindex="4" onchange="codigoGenerate()"></p>
        <p><input placeholder="Descripción" oninput="this.className = ''" name="descripcion" class="form-control" tabindex="5">

        </p>

      </fieldset>
    </div>
    <div class="tab">Datos:
      <fieldset>
        <p><input class="form-control" placeholder="Precio" oninput="this.className = ''" name="precio" tabindex="6" type="number"></p>
        <p>
          <label for="imagen">Seleccione una imagen del ítem</label>
          <input class="form-control" placeholder="Imagen" oninput="this.className = ''" name="imagen" id="imagen" tabindex="7" type="file"></p>
        <p><input class="form-control" placeholder="Detalle" oninput="this.className = ''" name="detalle" accept=".jpg" tabindex="8"></p>
        <p><label for="importado">¿Es Importado?
          <input value="IMPORTADO" oninput="this.className = ''" name="importado" type="checkbox"></label>
        </p>

      </fieldset>
    </div>
    <div class="tab">Almacén:
      <fieldset>
        <p><input class="form-control" placeholder="Condición" oninput="this.className = ''" name="condicion" tabindex="14"></p>
        <p><input class="form-control" placeholder="Cantidad disponible" oninput="this.className = ''" name="cantidad_disponible" tabindex="15" type="number"></p>
        <p><input class="form-control" placeholder="Stock Mínimo" oninput="this.className = ''" name="stock_min" tabindex="16" type="number"></p>
        <p><input class="form-control" placeholder="Stock Máximo" oninput="this.className = ''" name="stock_max" tabindex="17" type="number"></p>
        <p><input class="form-control" placeholder="Número de Serie" oninput="this.className = ''" name="numero_serie" tabindex="18"></p>

      </fieldset>
    </div>
    <div class="tab">Características:
      <fieldset>
        <p><input class="form-control" placeholder="Peso" oninput="this.className = ''" name="peso" tabindex="14" type="number"></p>
        <p><input class="form-control" placeholder="Medida (Unidad)" oninput="this.className = ''" name="unidad" tabindex="15"></p>
        <p><input class="form-control" placeholder="Detalle de medida" oninput="this.className = ''" name="detalle_medida" tabindex="16" type="number"></p>

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
      <span class="step"></span>

    </div>
  </form>
</div>
</div>


<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Guardar";
  } else {
    document.getElementById("nextBtn").innerHTML = "Siguiente";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
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

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}

function codigoGenerate(){
  var aaa = $('[name=linea_negocio]').val();
  var bbb = $('[name=marca]').val();
  var ccc = $('[name=familia]').val();

  if(aaa.trim!='' && bbb.trim!='' && ccc.trim!='' )
  {
   $.get('{{url('api/codigo')}}',function(data)

   { 

    if (!data) {
      var cod_i = '000001';
}else{
  console.log(data);
  var cod_i = data.id;
}
    var cod_a = aaa.substring(0,3).toUpperCase()
    var cod_b = bbb.substring(0,3).toUpperCase();
    var cod_c = ccc.substring(0,3).toUpperCase();
    var codigo = cod_a + "-" + cod_b + "-" + cod_c + "-" + cod_i
    $('[name=codigo]').val(codigo);
  });
 };


}
</script>



@endsection




