<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>BF Global</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>" />
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-118989375-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-118989375-1');
</script>

</head>
<body>
	<header>
    <nav class="navbar">
        <a class="navbar-brand" href="#"><figure><img src="http://constructoraonice.com/imagenes/2017-2017-LOGO.gif" alt="BF Global"></figure></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    </nav>

  </header>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3 saca">
        <div class="accordion" id="accordionMenu">
          <div class="card">
            <div class="card-header" id="ventas">
              <h5 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseVentas" aria-expanded="false" aria-controls="collapseOne">
                  Ventas
                </button>
              </h5>
            </div>

            <div id="collapseVentas" class="collapse" aria-labelledby="ventas" data-parent="#accordionMenu">
              <div class="card-body">
                <ul>
                 <li><a href="#">Clientes</a></li>
                 <li><a href="#">Vendedores</a></li>
                 <li><a href="#">Pedidos/cotizaciones</a></li>
                 <li><a href="#">Facturación</a></li>
                 <li><a href="#">Guías</a></li>
                 <li><a href="#">Notas de crédito</a></li>
                 <li><a href="#">Notas de debito</a></li>
                 <li><a href="#">Reportes</a></li>
               </ul>
             </div>
           </div>
         </div>
         <div class="card">
          <div class="card-header" id="compras">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseCompras" aria-expanded="false" aria-controls="collapseTwo">
                Compras
              </button>
            </h5>
          </div>
          <div id="collapseCompras" class="collapse" aria-labelledby="compras" data-parent="#accordionMenu">
            <div class="card-body">
              <ul>
               <li><a href="">Proveedores</a></li>
               <li><a href="">Órdenes de compra</a></li>
               <li><a href="">Compra nacional</a></li>
               <li><a href="">Compra importadas</a></li>
               <li><a href="">Guías</a></li>
               <li><a href="#">Notas de crédito</a></li>
               <li><a href="#">Notas de debito</a></li>
               <li><a href="#">Reportes</a></li>
             </ul>
           </div>
         </div>
       </div>
       <div class="card">
        <div class="card-header" id="GestionMateriales">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseGestionMateriales" aria-expanded="false" aria-controls="collapseGestionMateriales">
              Gestión de materiales
            </button>
          </h5>
        </div>
        <div id="collapseGestionMateriales" class="collapse" aria-labelledby="GestionMateriales" data-parent="#accordionMenu">
          <div class="card-body">
            <ul>
              <li><a href="">Histórico de costos por artículos</a></li>
              <li><a href="">Kardex</a></li>
              <li><a href="">Reportes de ventas</a></li>
              <li><a href="">Búsqueda y filtros</a></li>

            </div>
          </div>
        </div>  
        <div class="card">
          <div class="card-header" id="contabilidad">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseContabilidad" aria-expanded="false" aria-controls="collapseContabilidad">
                Contabilidad
              </button>
            </h5>
          </div>
          <div id="collapseContabilidad" class="collapse" aria-labelledby="contabilidad" data-parent="#accordionMenu">
            <div class="card-body">
              <ul>
                <li><a href="">Caja chica</a></li>
                <li><a href="">Estado mensual</a></li>
                <li><a href="">Balance mensual</a></li>
                <li><a href="">Comisiones</a></li>
                <li><a href=""></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="servicioTecnico">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseServicioTecnico" aria-expanded="false" aria-controls="collapseServicioTecnico">
                Servicio Técnico
              </button>
            </h5>
          </div>
          <div id="collapseServicioTecnico" class="collapse" aria-labelledby="servicioTecnico" data-parent="#accordionMenu">
            <div class="card-body">
              <ul>
                <li><a href="">Informes</a></li>
                <li><a href="">Actas de conformidad</a></li>
                <li><a href="">Actas de entrega</a></li>
                <li><a href="">Cartas de garantía</a></li>
                <li><a href="">Contratos de mantenimiento</a></li>
              </ul>
            </div>
          </div>
        </div>  
  <!--  
  <div class="card">
    <div class="card-header" id="crm">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#" aria-expanded="false" aria-controls="collapseCrm">
          CRM
        </button>
      </h5>
    </div>
    <div id="collapseCrm" class="collapse" aria-labelledby="crm" data-parent="#accordionMenu">
      <div class="card-body">
        
      </div>
    </div>
  </div>  
  
  <div class="card">
    <div class="card-header" id="gestionActivos">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseGestionActivos" aria-expanded="false" aria-controls="collapseGestionActivos">
          Gestión de activos
        </button>
      </h5>
    </div>
    <div id="collapseGestionActivos" class="collapse" aria-labelledby="gestionActivos" data-parent="#accordionMenu">
      <div class="card-body">
        
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="planillas">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsePlanillas" aria-expanded="false" aria-controls="collapsePlanillas">
          Planillas
        </button>
      </h5>
    </div>
    <div id="collapsePlanillas" class="collapse" aria-labelledby="planillas" data-parent="#accordionMenu">
      <div class="card-body">
        
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="gestionProyectos">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseGestionProyectos" aria-expanded="false" aria-controls="collapseGestionProyectos">
          Gestión de Proyectos
        </button>
      </h5>
    </div>
    <div id="collapseGestionProyectos" class="collapse" aria-labelledby="gestionProyectos" data-parent="#accordionMenu">
      <div class="card-body">
        
      </div>
    </div>
  </div>

<div class="card">
  <div class="card-header" id="indicadores">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseIndicadores" aria-expanded="false" aria-controls="collapseIndicadores">
        Indicadores
      </button>
    </h5>
  </div>
  <div id="collapseIndicadores" class="collapse" aria-labelledby="indicadores" data-parent="#accordionMenu">
    <div class="card-body">
      
    </div>
  </div>
</div>
-->
<div class="card">
  <div class="card-header" id="adminSistema">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseAdminSistema" aria-expanded="false" aria-controls="collapseAdminSistema">
        Administración de sistema
      </button>
    </h5>
  </div>
  <div id="collapseAdminSistema" class="collapse" aria-labelledby="adminSistema" data-parent="#accordionMenu">
    <div class="card-body">
      <ul>
       <li><a href="">Usuarios</a></li>
       <li><a href="">Auditoria</a></li>
     </ul>
   </div>
 </div>
</div>
</div>
</div>
<div class="col-md-9 casa"></div>
</div>
</div>



</body>
</html>