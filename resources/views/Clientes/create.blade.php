@extends('layouts.app')

@section('company', 'BF Global')
@section('title', 'Cliente')

@section('content')


<div class="card col-md-12">
  <div class="card-header"><strong>Cliente</strong> Nuevo</div>
  <div class="card-body">
    <form id="regForm" action="{{route('cliente.store')}}" method="POST">
    {{ csrf_field() }}
  <!-- One "tab" for each step in the form: -->
  <div class="tab">Datos:
    <fieldset>
    <p><input placeholder="RUC" oninput="this.className = ''" onchange="consultaSunat()" name="identificacion" class="form-control" tabindex="1"></p>
    <p><input placeholder="Nombre o razón Social" oninput="this.className = ''" name="razon_social" class="form-control" tabindex="2"></p>
    <p><select placeholder="Ejecutivo de Ventas" oninput="this.className = ''" name="ejecutivo_ventas_id" class="form-control" tabindex="3">
      <option value="">Ejecutivo de ventas</option>
      <option value="1">Juan Jimenez</option>
      <option value="2">María Parras</option>
      <option value="3">Lidia Martinez</option>
    </select>
    </p>
    <p><select placeholder="Actividad Económica" oninput="this.className = ''" name="actividad_economica_id" class="form-control" tabindex="3">
      <option value="">Actividad Económica</option>
      <option value="1">Actividad económica 1</option>
      <option value="2">Actividad económica 2</option>
      <option value="3">Actividad económica 3</option>
    </select>
    </p>
    <p><input placeholder="Grupo" oninput="this.className = ''" name="grupo" class="form-control" tabindex="4"></p>
    <p><input placeholder="Estado" oninput="this.className = ''" name="activo" class="form-control" tabindex="4"></p>
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
    <p><input class="form-control" placeholder="Hora de Pago" oninput="this.className = ''" name="hora_pago" tabindex="10" type="time"></p>
    <p><input class="form-control" placeholder="Cargo" oninput="this.className = ''" name="cargo" tabindex="11"></p>
    <p><input class="form-control" placeholder="Día de Tolerancia" oninput="this.className = ''" name="dia_tolerancia" tabindex="12"></p>
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

function consultaSunat(){
var val = $('[name=identificacion]').val();
        if(val.trim!='')
            $.get('{{url('api/sunat')}}?identificacion='+val,function(data)
            { 
            console.log(data) ;
                
                
                    
                if(data[0]!=undefined)
                {
                    $('[name=razon_social]').val(data[0]['nombre_o_razon_social']);
                    $('[name=activo]').val(data[0]['estado_del_contribuyente']);
                    $('[name=telefono]').val(data[0]['numero_telefono']);
                    $('[name=provincia]').val(data[0]['provincia']);
                    $('[name=distrito]').val(data[0]['distrito']);
                    $('[name=direccion]').val(data[0]['direccion_completa']);
                }
                else
                {
                   console.log('seamos arte <3');
                   // alert(data[0]);
             

                }
            });

      
}
</script>



@endsection




