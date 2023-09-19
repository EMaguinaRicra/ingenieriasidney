<!DOCTYPE html>
<html lang="en">

<!-- =========================
  Head
=========================== -->
<?php
    include("head.php");
?>

<body>
  <div class="wrapper">
    <div class="preloader">
      <div class="loading"><span></span><span></span><span></span><span></span></div>
    </div><!-- /.preloader -->

    <!-- =========================
        Header
    =========================== -->
    <?php
        include("../includes/header.php");
    ?>

    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title page-title-layout5 bg-overlay bg-overlay-2 bg-parallax">
      <div class="bg-img"><img src="../assets/images/page-titles/servicios.jpg" alt="background"></div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
            <h1 class="pagetitle__heading">Servicios<br>Profesionales</h1>
            <p class="pagetitle__desc">Que ofrecemos como empresa.</p>
            <a href="#servicios" class="btn btn__primary btn__icon" id="btn-servicios">
              <span>Nuestros Servicios</span><i class="icon-arrow-right"></i>
            </a>
          </div><!-- /.col-xl-6 -->
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 cta__banner-wrapper d-flex justify-content-end">
            <div class="cta__banner">
              <div class="bg-img"><img src="../assets/images/backgrounds/1.jpg" alt="background"></div>
              <h5 class="cta__title">¡Tu proyecto de vivienda! </h5>
              <p class="cta__desc">Hecho realidad junto con Ingeniería Sidney.</p>
            </div><!-- /.cta__banner -->
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================
        Services Layout 1
    =========================== -->
    <section id="servicios" class="services-layout1 pt-120 pb-90 bg-gray">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
            <div class="heading text-center mb-40">
              <span class="heading__subtitle">Nuestra Calidad</span>
              <h2 class="heading__title">Nos representa</h2>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-10 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="service-item">
              <div class="service__content">
                <div class="service__icon">
                  <i class="icon-brick-wall"></i>
                </div><!-- /.service__icon -->
                <h4 class="service__title">Ejecución<br>de obras</h4>
                <p class="service__desc">Contamos con personal calificado para ejecución de obras.</p>
                <a href="construccion.php" class="btn btn__secondary btn__link">
                  <span>Saber Más</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.service-content -->
              <div class="service__overlay bg-overlay bg-overlay-theme">
                <div class="bg-img"><img src="../assets/images/services/1.jpg" alt="background"></div>
              </div><!-- /.service__overlay -->
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="service-item">
              <div class="service__content">
                <div class="service__icon">
                  <i class="icon-engineer3"></i>
                </div><!-- /.service__icon -->
                <h4 class="service__title">Independización de Viviendas</h4>
                <p class="service__desc">Separa tu vivienda en múltiples lotes completamente legales.</p>
                <a href="independizacion.php" class="btn btn__secondary btn__link">
                  <span>Saber Más</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.service-content -->
              <div class="service__overlay bg-overlay bg-overlay-theme">
                <div class="bg-img"><img src="../assets/images/services/2.jpg" alt="background"></div>
              </div><!-- /.service__overlay -->
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="service-item">
              <div class="service__content">
                <div class="service__icon">
                  <i class="icon-building"></i>
                </div><!-- /.service__icon -->
                <h4 class="service__title">Supervisión<br>de obras</h4>
                <p class="service__desc">Verificamos el correcto funcionamiento de una ejecución de obra.</p>
                <a href="supervision.php" class="btn btn__secondary btn__link">
                  <span>Saber Más</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.service-content -->
              <div class="service__overlay bg-overlay bg-overlay-theme">
                <div class="bg-img"><img src="../assets/images/services/3.jpg" alt="background"></div>
              </div><!-- /.service__overlay -->
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="service-item">
              <div class="service__content">
                <div class="service__icon">
                    <i class="icon-blueprint"></i>
                </div><!-- /.service__icon -->
                <h4 class="service__title">Diseño de<br>planos</h4>
                <p class="service__desc">Planos perimétricos y planos de viviendas.</p>
                <a href="planos.php" class="btn btn__secondary btn__link">
                  <span>Saber Más</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.service-content -->
              <div class="service__overlay bg-overlay bg-overlay-theme">
                <div class="bg-img"><img src="../assets/images/services/6.jpg" alt="background"></div>
              </div><!-- /.service__overlay -->
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="service-item">
              <div class="service__content">
                <div class="service__icon">
                <i class="icon-paint-roller"></i>
                </div><!-- /.service__icon -->
                <h4 class="service__title">Diseño de<br>Interiores</h4>
                <p class="service__desc">Tu espacio más acogedor con un diseño profesional de acabados.</p>
                <a href="interiores.php" class="btn btn__secondary btn__link">
                  <span>Saber Más</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.service-content -->
              <div class="service__overlay bg-overlay bg-overlay-theme">
                <div class="bg-img"><img src="../assets/images/services/4.jpg" alt="background"></div>
              </div><!-- /.service__overlay -->
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="service-item">
              <div class="service__content">
                <div class="service__icon">
                  <i class="icon-crane2"></i>
                </div><!-- /.service__icon -->
                <h4 class="service__title">Topografía<br>Nivelación</h4>
                <p class="service__desc">Medimos de manera profesional y precisa los terrenos de nuestro clientes.</p>
                <a href="topografia.php" class="btn btn__secondary btn__link">
                  <span>Saber Más</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.service-content -->
              <div class="service__overlay bg-overlay bg-overlay-theme">
                <div class="bg-img"><img src="../assets/images/services/5.jpg" alt="background"></div>
              </div><!-- /.service__overlay -->
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Services Layout 1 -->

    <!-- ========================
        Footer
      ========================== -->
    <?php
        include("../includes/footer.php");
    ?>
</body>

</html>