
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">

    <title>@yield('company') - @yield('title')</title>
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Required meta tags-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Sistema multiempresa">
  <meta name="author" content="Jhosnoirlit Hernández">
  <meta name="keywords" content="multiempresa">

   <!-- Jquery JS-->
    <script src="<?php echo e(asset('js/jquery-3.3.1.js'))?>"></script>
        <!-- Datatable-->
    <script src="<?php echo e(asset('js/datatable/dataTables.bootstrap4.min.css'))?>"></script>
    <script src="<?php echo e(asset('js/datatable/responsive.bootstrap4.min.css'))?>"></script>


  <!--CSS-->
    <!-- Fontfaces CSS-->
  <link href="<?php echo e(asset('css/font-face.css')) ?>" rel="stylesheet" media="all">
  <link href="<?php echo e(asset('js/font-awesome-4.7/css/font-awesome.min.css')) ?>" rel="stylesheet" media="all">
  <link href="<?php echo e(asset('js/font-awesome-5/css/fontawesome-all.min.css')) ?>" rel="stylesheet" media="all">
  <link href="<?php echo e(asset('js/mdi-font/css/material-design-iconic-font.min.css'))?>" rel="stylesheet" media="all">

  <!-- Bootstrap CSS-->
  <link href="<?php echo e(asset('js/bootstrap-4.1/bootstrap.min.css'))?>" rel="stylesheet" media="all">

  <!-- Vendor CSS-->
  <link href="<?php echo e(asset('js/animsition/animsition.min.css')) ?>" rel="stylesheet" media="all">
  <link href="<?php echo e(asset('js/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')) ?>" rel="stylesheet" media="all">
  <link href="<?php echo e(asset('js/wow/animate.css')) ?>" rel="stylesheet" media="all">
  <link href="<?php echo e(asset('js/css-hamburgers/hamburgers.min.css')) ?>" rel="stylesheet" media="all">
  <link href="<?php echo e(asset('js/slick/slick.css" rel="stylesheet')) ?>" media="all">
  <link href="<?php echo e(asset('js/select2/select2.min.css')) ?>" rel="stylesheet" media="all">
  <link href="<?php echo e(asset('js/perfect-scrollbar/perfect-scrollbar.css')) ?>" rel="stylesheet" media="all">

  <!-- Main CSS -->
  
  <link rel="stylesheet" href="<?php echo e(asset('css/theme.css')); ?>" />
  <link rel="stylesheet" href="<?php echo e(asset('css/font-face.css')); ?>" />
  

  
  <!-- Global site tag (gtag.js) - Google Analytics   

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-118989375-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-118989375-1');
  </script>
-->

</head>
<body class="animsition">
  <div class="page-wrapper">
    @guest

       {{-- @section('guest-content')--}}
          <p>hola extraño</p>
        @endsection
    @endguest
    @auth

    <!-- HEADER MOBILE-->
    <header class="header-mobile d-block d-lg-none">
      <div class="header-mobile__bar">
        <div class="container-fluid">
          <div class="header-mobile-inner">
            <div class="col-md-8 col-sm-8">
            <a class="logo" href="{{ url('/') }}">
              <img class=" img-fluid" src="<?php echo e(asset('img/bfglobal-logo.png')) ?>" alt="BFGlobal" />
            </a>
            </div>
            <button class="hamburger hamburger--slider" type="button">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button>
          </div>
        </div>
      </div>
      <nav class="navbar-mobile">
        <div class="container-fluid">
          <ul class="navbar-mobile__list list-unstyled">
            <li class="has-sub">
              <a class="js-arrow" href="#">
                <i class="fas fa-truck"></i>Ventas</a>
              <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                <li>
                  <a href="{{ route('cliente.index') }}">Clientes</a>
                </li>
                <li>
                  <a href="#">Vendedores</a>
                </li>
                <li>
                  <a href="#">Cotizaciones</a>
                </li>
                <li>
                  <a href="#">Facturas</a>
                </li>
                <li>
                  <a href="#">Boletas</a>
                </li>
                <li>
                  <a href="#">Guías</a>
                </li>
                <li>
                  <a href="#">Nota de Débito</a>
                </li>
                <li>
                  <a href="#">Nota de Crédito</a>
                </li>
              </ul>
            </li>
            <li class="has-sub">
              <a class="js-arrow" href="#">
                <i class="fas fa-shopping-cart"></i>Compras</a>
              <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                <li>
                  <a href="{{ route('proveedor.index') }}">Proveedores</a>
                </li>
                <li>
                  <a href="#">Vendedores</a>
                </li>
                <li>
                  <a href="#">Ordenes de Compra</a>
                </li>
                <li>
                  <a href="#">Compra Nacional</a>
                </li>
                <li>
                  <a href="#">Compra Importada</a>
                </li>
                <li>
                  <a href="#">Guías</a>
                </li>
                <li>
                  <a href="#">Nota de Débito</a>
                </li>
                <li>
                  <a href="#">Nota de Crédito</a>
                </li>
              </ul>
            </li>
            <li class="has-sub">
              <a class="js-arrow" href="#">
                <i class="fas fa-star"></i>Gestión de materiales</a>
              <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                <li>
                  <a href="{{ route('item.index') }}">Artículos</a>
                </li>
                <li>
                  <a href="#">Kardex</a>
                </li>
                <li>
                  <a href="#">Resportes</a>
                </li>
                <li>
                  <a href="#">Búsquedas y filtro</a>
                </li>
                
              </ul>
            </li>
            <li class="has-sub">
              <a class="js-arrow" href="#">
                <i class="fas fa-book"></i>Contabilidad</a>
              <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                <li>
                  <a href="#">Cobranzas</a>
                </li>
                <li>
                  <a href="#">Caja Chica</a>
                </li>
                <li>
                  <a href="#">Estado de cuenta bancario</a>
                </li>
                <li>
                  <a href="#">Configuración</a>
                </li>
                
              </ul>
            </li>
            
            <li >
              <a  href="#">
                <i class="fas fa-group"></i>CRM</a>
            </li>
            
            <li class="has-sub">
              <a class="js-arrow" href="#">
                <i class="fas fa-tachometer-alt"></i>Proyectos</a>
              <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                <li>
                  <a href="#">Búsqueda</a>
                </li>
                <li>
                  <a href="#">Indicadores</a>
                </li>
                <li>
                  <a href="#">Informes técnicos</a>
                </li>
                  
              </ul>
            </li>
      
            <li >
              <a  href="{{ route('equipo.index') }}">
                <i class="fas fa-gavel"></i>Gestión de activos</a>
            </li>
            <li>
              <a href="chart.html">
                <i class="fas fa-chart-bar"></i>Indicadores</a>
            </li>
            <li class="has-sub">
              <a class="js-arrow" href="#">
                <i class="fas fa-copy"></i>Administración</a>
              <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                <li>
                  <a href="login.html">Usuarios</a>
                </li>
                <li>
                  <a href="register.html">Auditoria</a>
                </li>

              </ul>
            </li>
            
          </ul>
        </div>
      </nav>
    </header>
    <!-- END HEADER MOBILE-->

    <!-- MENU SIDEBAR-->
    <aside class="menu-sidebar d-none d-lg-block">
      <div class="logo">
        <a href="{{ url('/') }}">
          <img src="<?php echo e(asset('img/bfglobal-logo.png')) ?>" alt="BFGlobal" />
        </a>
      </div>
      <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
          <ul class="list-unstyled navbar__list">
            <li class="has-sub">
              <a class="js-arrow" href="#">
                <i class="fas fa-truck"></i>Ventas</a>
              <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                <li>
                  <a href="{{ route('cliente.index') }}">Clientes</a>
                </li>
                <li>
                  <a href="#">Vendedores</a>
                </li>
                <li>
                  <a href="#">Cotizaciones</a>
                </li>
                <li>
                  <a href="#">Facturas</a>
                </li>
                <li>
                  <a href="#">Boletas</a>
                </li>
                <li>
                  <a href="#">Guías</a>
                </li>
                <li>
                  <a href="#">Nota de Débito</a>
                </li>
                <li>
                  <a href="#">Nota de Crédito</a>
                </li>
              </ul>
            </li>
            <li class="has-sub">
              <a class="js-arrow" href="#">
                <i class="fas fa-shopping-cart"></i>Compras</a>
              <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                <li>
                  <a href="{{ route('proveedor.index') }}">Proveedores</a>
                </li>
                <li>
                  <a href="#">Vendedores</a>
                </li>
                <li>
                  <a href="#">Ordenes de Compra</a>
                </li>
                <li>
                  <a href="#">Compra Nacional</a>
                </li>
                <li>
                  <a href="#">Compra Importada</a>
                </li>
                <li>
                  <a href="#">Guías</a>
                </li>
                <li>
                  <a href="#">Nota de Débito</a>
                </li>
                <li>
                  <a href="#">Nota de Crédito</a>
                </li>
              </ul>
            </li>
            <li class="has-sub">
              <a class="js-arrow" href="#">
                <i class="fas fa-star"></i>Gestión de materiales</a>
              <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                <li>
                  <a href="{{ route('item.index') }}">Artículos</a>
                </li>
                <li>
                  <a href="#">Kardex</a>
                </li>
                <li>
                  <a href="#">Resportes</a>
                </li>
                <li>
                  <a href="#">Búsquedas y filtro</a>
                </li>
                
              </ul>
            </li>
            <li class="has-sub">
              <a class="js-arrow" href="#">
                <i class="fas fa-book"></i>Contabilidad</a>
              <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                <li>
                  <a href="#">Cobranzas</a>
                </li>
                <li>
                  <a href="#">Caja Chica</a>
                </li>
                <li>
                  <a href="#">Estado de cuenta bancario</a>
                </li>
                <li>
                  <a href="#">Configuración</a>
                </li>
                
              </ul>
            </li>
           
            <li >
              <a  href="#">
                <i class="fas fa-group"></i>CRM</a>
            </li>
        
            <li class="has-sub">
              <a class="js-arrow" href="#">
                <i class="fas fa-tachometer-alt"></i>Proyectos</a>
              <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                <li>
                  <a href="#">Búsqueda</a>
                </li>
                <li>
                  <a href="#">Indicadores</a>
                </li>
                <li>
                  <a href="#">Informes técnicos</a>
                </li>
                  
              </ul>
            </li>
            
            <li >
              <a  href="{{ route('equipo.index') }}">
                <i class="fas fa-gavel"></i>Gestión de activos</a>
            </li>
            <li>
              <a href="chart.html">
                <i class="fas fa-chart-bar"></i>Indicadores</a>
            </li>
            <li class="has-sub">
              <a class="js-arrow" href="#">
                <i class="fas fa-copy"></i>Administración</a>
              <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                <li>
                  <a href="login.html">Usuarios</a>
                </li>
                <li>
                  <a href="register.html">Auditoria</a>
                </li>

              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </aside>
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container">
      <!-- HEADER DESKTOP-->
      <header class="header-desktop">
        <div class="section__content section__content--p30">
          <div class="container-fluid">
            <div class="header-wrap">
              <form class="form-header" action="" method="POST">
                <input class="au-input au-input--xl" type="text" name="search" placeholder="Buscar datos y reportes..." />
                <button class="au-btn--submit" type="submit">
                  <i class="zmdi zmdi-search"></i>
                </button>
              </form>
              <div class="header-button">
                <div class="noti-wrap">

                 
                  <div class="noti__item js-item-menu">
                    <i class="zmdi zmdi-notifications"></i>
                    <span class="quantity">3</span>
                    <div class="notifi-dropdown js-dropdown">
                      <div class="notifi__title">
                        <p>You have 3 Notifications</p>
                      </div>
                      <div class="notifi__item">
                        <div class="bg-c1 img-cir img-40">
                          <i class="zmdi zmdi-email-open"></i>
                        </div>
                        <div class="content">
                          <p>You got a email notification</p>
                          <span class="date">April 12, 2018 06:50</span>
                        </div>
                      </div>
                      <div class="notifi__item">
                        <div class="bg-c2 img-cir img-40">
                          <i class="zmdi zmdi-account-box"></i>
                        </div>
                        <div class="content">
                          <p>Your account has been blocked</p>
                          <span class="date">April 12, 2018 06:50</span>
                        </div>
                      </div>
                      <div class="notifi__item">
                        <div class="bg-c3 img-cir img-40">
                          <i class="zmdi zmdi-file-text"></i>
                        </div>
                        <div class="content">
                          <p>You got a new file</p>
                          <span class="date">April 12, 2018 06:50</span>
                        </div>
                      </div>
                      <div class="notifi__footer">
                        <a href="#">All notifications</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="account-wrap">
                  <div class="account-item clearfix js-item-menu">
                    <div class="image rounded-circle">
                      <img src="<?php echo e(asset('img/icon/avatar-01.jpg')) ?>" alt="John Doe" class="" />
                    </div>
                    <div class="content">
                      <a class="js-acc-btn" href="#">{{ Auth::user()->name }}</a>
                    </div>
                    <div class="account-dropdown js-dropdown">
                      <div class="info clearfix">
                        <div class="image rounded-circle">
                          <a href="#">
                            <img src="<?php echo e(asset('img/icon/avatar-01.jpg')) ?>" class="" alt="John Doe" />
                          </a>
                        </div>
                        <div class="content">
                          <h5 class="name">
                            <a href="<?php echo e(url('perfil')); ?>">{{ Auth::user()->name }}</a>
                          </h5>
                          <span class="email">{{ Auth::user()->email }}</span>
                        </div>
                      </div>
                      <div class="account-dropdown__body">
                        <div class="account-dropdown__item">
                          <a href="#">
                            <i class="zmdi zmdi-account"></i>Cuenta</a>
                        </div>
                        <div class="account-dropdown__item">
                          <a href="#">
                            <i class="zmdi zmdi-settings"></i>Configuración</a>
                        </div>
                        <div class="account-dropdown__item">
                          <a href="#">
                            <i class="zmdi zmdi-settings"></i>empresas</a>
                        </div>
                        
                      <div class="account-dropdown__footer">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                          <i class="zmdi zmdi-power"></i>Salir</a>
                            
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- END HEADER DESKTOP-->

      <!-- MAIN CONTENT-->
      <div class="main-content">
        <div class="section__content section__content--p30">
          <div class="container-fluid">
            <div class="row">
              @yield('content')
          </div>
        </div>
      </div>
    </div>
    @yield('script')
    <!-- END PAGE CONTAINER-->


    <!-- GENERIC DIV MODAL-->
            <!-- modal small -->
            <div class="modal fade" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
                
            </div>


            <!-- end modal small -->
    <div id="all-modal" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"></div>
    <!-- END GENERIC DIV MODAL-->
    
    <!-- FOOTER-->
                          <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    footer</p>
                                </div>
                            </div>
                        </div>
    <!-- END FOOTER-->

  </div>
   @endauth

    <!-- Datatable-->
    <script src="<?php echo e(asset('js/datatable/dataTables.bootstrap4.min.js'))?>"></script>
    <script src="<?php echo e(asset('js/datatable/dataTables.responsive.min.js'))?>"></script>
    <script src="<?php echo e(asset('js/datatable/responsive.bootstrap4.min.js'))?>"></script>
    <script src="<?php echo e(asset('js/datatable/jquery.dataTables.min.js'))?>"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo e(asset('js/bootstrap-4.1/popper.min.js')) ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap-4.1/bootstrap.min.js')) ?>"></script>
    <!-- Vendor JS       -->
    <script type="text/javascript" src="<?php echo e(asset('js/DataTables/datatables.min.js')) ?>"></script>
    <script src="<?php echo e(asset('js/slick/slick.min.js'))?>">
    </script>
    <script src="<?php echo e(asset('js/wow/wow.min.js'))?>"></script>
    <script src="<?php echo e(asset('js/animsition/animsition.min.js')) ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap-progressbar/bootstrap-progressbar.min.js'))?>">
    </script>
    <script src="<?php echo e(asset('js/counter-up/jquery.waypoints.min.js')) ?>"></script>
    <script src="<?php echo e(asset('js/counter-up/jquery.counterup.min.js')) ?>">
    </script>
    <script src="<?php echo e(asset('js/circle-progress/circle-progress.min.js')) ?>"></script>
    <script src="<?php echo e(asset('js/perfect-scrollbar/perfect-scrollbar.js')) ?>"></script>
    <script src="<?php echo e(asset('js/chartjs/Chart.bundle.min.js')) ?>"></script>
    <script src="<?php echo e(asset('js/select2/select2.min.js')) ?>">
    </script>

    <!-- Main JS-->
    <script src="<?php echo e(asset('js/main.js')) ?>"></script>
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>