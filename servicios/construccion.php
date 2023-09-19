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
    <section class="page-title page-title-layout6 bg-overlay bg-overlay-2 bg-parallax">
      <div class="bg-img"><img src="../assets/images/page-titles/s_arquitectura.jpg" alt="background"></div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
            <h1 class="pagetitle__heading mb-0">Arquitectura <br> Construcción</h1>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ======================
      Text Content Section
    ========================= -->
    <section class="text-content-section pb-90">
      <div class="container">
        <div class="row">
          <?php
            include("aside.php");
          ?>

    <!-- ======================
      Información de servicio
    ========================= -->
          <div class="col-sm-12 col-md-12 col-lg-8">
            <h5 class="mb-40">Nuestros trabajos: Arquitectura.</h5>
            <div class="portfolio-grid-layout2">
              <div class="row">
                <!-- portfolio item #1 -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="portfolio-item">
                    <div class="portfolio__img">
                      <img src="../assets/images/portfolio/grid/notext-5.jpg" alt="portfolio img">
                    </div><!-- /.portfolio-img -->
                    <div class="portfolio__content">
                      <h4 class="portfolio__title"><a href="#">Cámara de Bombeo</a></h4>
                      <div class="portfolio__cat">
                        <a href="#">Construcción</a><a href="#">Supervisión</a>
                      </div><!-- /.portfolio-cat -->
                    </div><!-- /.portfolio-content -->
                  </div><!-- /.portfolio-item -->
                </div><!-- /.col-lg-4 -->
                
            </div><!-- /.portfolio-grid-layout2 -->
            <div class="text__block mb-30">
              <h5 class="text__block-title">Vista General</h5>
              <p class="text__block-desc">
                Como arquitectos experimentados, entendemos que la clave para un proyecto exitoso es la colaboración. 
                Trabajamos con un equipo de expertos en diseño, planificación y construcción para garantizar que cada 
                proyecto se ejecute de manera eficiente y efectiva. Desde la primera reunión hasta la entrega final, 
                estamos comprometidos a cumplir con los más altos estándares de calidad.
              </p>
            </div><!-- /.text-block -->

            <h5 class="fz-25 mt-20">Pregunta Frecuentes</h5>
            <div id="accordion" class="mb-60">
              <div class="accordion-item">
                <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse1">
                  <a class="accordion__item-title" href="#">¿Qué necesito para empezar mi proyecto?</a>
                </div><!-- /.accordion-item-header -->
                <div id="collapse1" class="collapse show" data-parent="#accordion">
                  <div class="accordion__item-body">
                    <p>
                      Se necesita la aprobación por parte de la municipalidad respectiva de los planos previamente diseñados 
                      y verificados por profesionales de sus diferentes áreas (sanitarios, eléctricos, arquitectos, etc.)
                    </p>
                  </div><!-- /.accordion-item-body -->
                </div>
              </div><!-- /.accordion-item -->
              <div class="accordion-item">
                <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse2">
                  <a class="accordion__item-title" href="#">¿Cómo puedo saber cuanto va a costar?</a>
                </div><!-- /.accordion-item-header -->
                <div id="collapse2" class="collapse" data-parent="#accordion">
                  <div class="accordion__item-body">
                    <p>
                      Nuestra empresa realiza presupuestos una vez establecidos los planos, aprobados y nos acomodamos
                      a los límites que puedan tener los clientes y también al avance que se desee realizar, así como también
                      acomodamos el presupuesto para tratar de ser la mejor opción para los mismos.
                    </p>
                  </div><!-- /.accordion-item-body -->
                </div>
              </div><!-- /.accordion-item -->
              <div class="accordion-item opened">
                <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse3">
                  <a class="accordion__item-title" href="#">¿Se tiene que realizar el proyecto completo de una sola vez?</a>
                </div><!-- /.accordion-item-header -->
                <div id="collapse3" class="collapse" data-parent="#accordion">
                  <div class="accordion__item-body">
                    <p>
                      El cliente tiene la libertad de indicar a su empresa cuanto desea realizar en cuanto a su avance.
                      Si no es posible realizar una construcción total de un predio de 3 pisos, por ejemplo, solo se puede 
                      hacer hasta el segundo y se deja con proyecciones a futuro para el posible tercer piso o cambios que
                      el cliente desea realizar.
                    </p>
                  </div><!-- /.accordion-item-body -->
                </div>
              </div><!-- /.accordion-item -->
            </div><!-- /.accordion -->

            <div class="text__block">
              <h5 class="text__block-title">¿Cómo trabajamos?</h5>
              <p class="text__block-desc">
                Nuestro enfoque personalizado nos permite diseñar y construir espacios únicos que 
                reflejen la personalidad y estilo de vida de nuestros clientes. El proceso comienza 
                con una consulta inicial para conocer tus necesidades y deseos, seguida de una fase de 
                diseño donde nuestro equipo de expertos crea un diseño personalizado que se adapta a tus especificaciones.
                <br><br>

                Una vez aprobado el diseño, comenzamos la fase de construcción, supervisando de cerca todo el 
                proceso para asegurarnos de que se sigan los planes y se cumplan las especificaciones. 
                Nuestro compromiso con la excelencia se refleja en cada etapa del proceso, y trabajamos incansablemente
                para garantizar que cada proyecto se ejecute de manera eficiente y efectiva.
                <br><br>

                Cuando la construcción esté completa, haremos una inspección final para asegurarnos de que todo se 
                haya hecho según las especificaciones. Finalmente, entregaremos tu espacio transformado, listo para ser 
                disfrutado. En resumen, nuestro enfoque integral garantiza que cada proyecto sea una obra de arte única 
                y personalizada que refleje tu estilo y personalidad.            
              </p>
            </div><!-- /.text-block -->

            <div class="video-banner">
              <img src="../assets/images/banners/5.jpg" alt="banner">
              <a class="video__btn video__btn-white popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                <div class="video__player">
                  <span class="video__player-animation"></span>
                  <span class="video__player-animation video__player-animation-2"></span>
                  <i class="fa fa-play"></i>
                </div>
                <span class="video__btn-title color-white">Watch Our Video!</span>
              </a>
            </div><!-- /.video -->
          </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Text Content Section -->


    <!-- ========================
        Footer
      ========================== -->
    <?php
        include("../includes/footer.php");
    ?>
</body>

</html>