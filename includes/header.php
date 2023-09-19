<?php $variable = $_SERVER['PHP_SELF']; ?>
<header class="header header-transparent header-layout1">
    <nav class="navbar navbar-expand-lg sticky-navbar">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?php if (strpos($variable, "index") == false) echo "../" ?>index.php">
          <img src="<?php if (strpos($variable, "index") == false) echo "../" ?>assets/images/logo/logo_light.png" class="logo-light" style="width: 250px;" alt="logo">
          <img src="<?php if (strpos($variable, "index") == false) echo "../" ?>assets/images/logo/logo_dark.png" class="logo-dark" style="width: 250px;" alt="logo">
        </a>
        <button class="navbar-toggler" type="button">
          <span class="menu-lines"><span></span></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNavigation">
          <ul class="navbar-nav">
            <li class="nav__item with-dropdown">
              <a href="<?php if (strpos($variable, "index") == false) echo "../" ?>index.php" class="dropdown-toggle nav__item-link 
                <?php
                  if (strpos($variable, "index") !== false)
                  echo 'active'
                ?>">Inicio</a>


              <i class="fa fa-angle-down" data-toggle="dropdown"></i>
            </li><!-- /.nav-item -->
            <li class="nav__item with-dropdown">
              <a href="<?php if (strpos($variable, "index") == false) echo "../" ?>nosotros/nosotros.php" class="dropdown-toggle nav__item-link  <?php
                  
                  if (strpos($variable, "nosotros") !== false)
                  echo 'active'
                ?>">Nosotros
              </a>
              <i class="fa fa-angle-down" data-toggle="dropdown"></i>
              <ul class="dropdown-menu">
                <li class="nav__item"><a href="<?php if (strpos($variable, "index") == false) echo "../" ?>nosotros/nosotros.php" class="nav__item-link">Conócenos</a></li>
                <!-- /.nav-item -->
                <li class="nav__item"><a href="<?php if (strpos($variable, "index") == false) echo "../" ?>nosotros/preguntas-frecuentes.php" class="nav__item-link">Preguntas Frecuentes</a></li>
                <!-- /.nav-item -->
              </ul><!-- /.dropdown-menu -->
            </li><!-- /.nav-item -->
            <li class="nav__item with-dropdown">
              <a href="<?php if (strpos($variable, "index") == false) echo "../" ?>servicios/servicios.php" class="dropdown-toggle nav__item-link 
              <?php
                  
                  if (strpos($variable, "servicios") !== false)
                  echo 'active'
                ?>">Servicios</a>
              <i class="fa fa-angle-down" data-toggle="dropdown"></i>
                <ul class="dropdown-menu">
                      <li class="nav__item"><a href="<?php if (strpos($variable, "index") == false) echo "../" ?>servicios/construccion.php" class="nav__item-link">Ejecución de obra</a></li>
                      <!-- /.nav-item -->
                      <li class="nav__item"><a href="<?php if (strpos($variable, "index") == false) echo "../" ?>servicios/independizacion.php" class="nav__item-link">Independización</a></li>
                      <!-- /.nav-item -->
                      <li class="nav__item"><a href="<?php if (strpos($variable, "index") == false) echo "../" ?>servicios/supervision.php" class="nav__item-link">Supervisión de obra</a></li>
                      <!-- /.nav-item -->
                      <li class="nav__item"><a href="<?php if (strpos($variable, "index") == false) echo "../" ?>servicios/planos.php" class="nav__item-link">Diseño de planos</a></li>
                      <!-- /.nav-item -->
                      <li class="nav__item"><a href="<?php if (strpos($variable, "index") == false) echo "../" ?>servicios/interiores.php" class="nav__item-link">Diseño de interiores</a></li>
                      <!-- /.nav-item -->
                      <li class="nav__item"><a href="<?php if (strpos($variable, "index") == false) echo "../" ?>servicios/topografia.php" class="nav__item-link">Topografía</a></li>
                      <!-- /.nav-item -->
                  </ul><!-- /.dropdown-menu -->
            </li><!-- /.nav-item -->
            <li class="nav__item with-dropdown">
              <a href="<?php if (strpos($variable, "index") == false) echo "../" ?>proyectos/proyectos.php" class="dropdown-toggle nav__item-link 
                <?php
                    
                    if (strpos($variable, "proyectos") !== false)
                    echo 'active'
                ?>">Proyectos</a>
              <i class="fa fa-angle-down" data-toggle="dropdown"></i>
            </li><!-- /.nav-item -->
            <li class="nav__item">
              <a href="<?php if (strpos($variable, "index") == false) echo "../" ?>contacto/contacto.php" class="nav__item-link">Contacto</a>
            </li><!-- /.nav-item -->
            <li class="nav__item nav__item-btn d-none d-md-block">
              <a href="<?php if (strpos($variable, "index") == false) echo "../" ?>contacto/contacto.php" class="btn btn__primary action__btn-request">
                <span>Cotizar</span><i class="icon-arrow-right"></i>
              </a>
            </li>
          </ul><!-- /.navbar-nav -->
        </div><!-- /.navbar-collapse -->
        <div class="contact__number d-flex align-items-center">
          <i class="icon-phone"></i>
          <a href="tel:925148769">Llamar</a>
        </div><!-- /.contact__numbr -->
      </div><!-- /.container -->
    </nav><!-- /.navabr -->
  </header><!-- /.Header -->