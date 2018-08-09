@extends('layouts.app')

@section('company', 'BF Global')
@section('title', 'Proveedores')

@section('content')


<div class="card col-md-12">
  <div class="card-header"><strong>Proveedor</strong> Nuevo</div>
  <div class="card-body">
    <form id="regForm" action="{{route('proveedor.store')}}" method="POST">
    {{ csrf_field() }}
  <!-- One "tab" for each step in the form: -->
  <div class="tab">Datos:
    <p><input placeholder="RUC" oninput="this.className = ''"  name="identificacion" class="form-control"></p>
    <p><input placeholder="Nombre o razón Social" oninput="this.className = ''" name="razon_social" class="form-control"></p>
    <p><input placeholder="Website" oninput="this.className = ''" name="website" class="form-control"></p>

    <p><input type="check" placeholder="Last name..." oninput="this.className = ''" name="activo" class="form-control"></p>
  </div>
  <div class="tab">Contacto:
    <p><input placeholder="Nombre del Contacto" oninput="this.className = ''" name="persona"></p>
    <p><input placeholder="Correo" oninput="this.className = ''" name="correo"></p>
    <p><input placeholder="Teléfono" oninput="this.className = ''" name="telefono"></p>
    <p><input placeholder="Cedúla" oninput="this.className = ''" name="cedula"></p>
    <p><input placeholder="Día de Pago" oninput="this.className = ''" name="dia_pago"></p>
    <p><input placeholder="Hora de Pago" oninput="this.className = ''" name="hora_pago"></p>
    <p><input placeholder="Cargo" oninput="this.className = ''" name="cargo"></p>
    <p><input placeholder="Día de Tolerancia" oninput="this.className = ''" name="dia_tolerancia"></p>
    <p><input placeholder="Observaciones" oninput="this.className = ''" name="observaciones"></p>
  </div>
  <div class="tab">Sucursal:
    <p><input placeholder="Dirección" oninput="this.className = ''" name="direccion"></p>
    <p><input placeholder="Distrito" oninput="this.className = ''" name="distrito"></p>
    <p><input placeholder="Provincia" oninput="this.className = ''" name="provincia"></p>
    <p><input placeholder="País" oninput="this.className = ''" name="pais"></p>
    <p><input placeholder="Teléfono" oninput="this.className = ''" name="telefono"></p>
    <p><input placeholder="¿Es la sucursal Principal?" oninput="this.className = ''" name="principal"></p>
  </div>
  <div class="tab">Banco:
    <p><input placeholder="Nombre de la entidad Bancaria" oninput="this.className = ''" name="nombre"></p>
    <p><input placeholder="Cuenta Corriente (Soles)"  name="cta_cte_s" type="text"></p>
    <p><input placeholder="Cuenta Coriente (USD)"  name="cta_cte_us" type="text"></p>
    <p><input placeholder="Límite de Crédito" oninput="this.className = ''" name="limite_credito" type="text"></p>
    <p><input placeholder="Día de crédito" oninput="this.className = ''" name="dia_credito" type="text"></p>
  </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Anterior</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Siguiente</button>
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

function consultaSunat(){
          var val = $('[name=identificacion]').val();
        if(val.trim!='')
            $.get('{{url('api/sunat')}}?nouser=1&identificacion='+val,function(data)
            { 
            console.log(data) ;
                console.log(data);
                var proveedor_id = data[0]['id'];
                    
                if(data[0]!=undefined)
                {
                   /* $('[name=razon_social]').val(data[0]['nombre_o_razon_social']);
                    $('[name=estado]').val(data[0]['estado_del_contribuyente']);
                    $('[name=numero_telefono]').val(data[0]['numero_telefono']);
                    $('[name=human_id]').val(data[0]['id']);
                    $('[name=tranca]').val("PASA");
                    console.log('hola, vale');

                    */
                }
                else
                {
                  console.log('Jogä');
                  /*
                    $('[name=cedula]').val('');
                    alert('Usuario foraneo a la instituación o ya registrado');
                    $('[name=propio]').val("foraneo"); 
                    console.log('Chao, vale')
                    */
                }
            });
      
}
</script>



@endsection