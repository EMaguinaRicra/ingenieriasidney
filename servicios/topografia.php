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
      <div class="bg-img"><img src="../assets/images/page-titles/s_topo.jpg" alt="background"></div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
            <h1 class="pagetitle__heading mb-0">Topografía</h1>
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


          <div class="col-sm-12 col-md-12 col-lg-8">
            <h5 class="mb-40">
              Nuestros trabajos: Topografía y Nivelación
            </h5>
            <div class="portfolio-grid-layout2">
              <div class="row">
                <!-- portfolio item #1 -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="portfolio-item">
                    <div class="portfolio__img">
                    <img src="../assets/images/portfolio/grid/notext-2.jpg" alt="portfolio img">
                    </div><!-- /.portfolio-img -->
                    <div class="portfolio__content">
                      <h4 class="portfolio__title"><a href="#">Residencial Gallito de las Rocas</a></h4>
                      <div class="portfolio__cat">
                        <a href="#">Topografía</a><a href="#">Terreno disparejo</a>
                      </div><!-- /.portfolio-cat -->
                    </div><!-- /.portfolio-content -->
                  </div><!-- /.portfolio-item -->
                </div><!-- /.col-lg-4 -->
                <!-- portfolio item #2 -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="portfolio-item">
                    <div class="portfolio__img">
                      <img src="../assets/images/portfolio/grid/notext-6.jpg" alt="portfolio img">
                    </div><!-- /.portfolio-img -->
                    <div class="portfolio__content">
                      <h4 class="portfolio__title"><a href="#">Asociación Manzanares</a></h4>
                      <div class="portfolio__cat">
                        <a href="#">Topografía</a><a href="#">Mediciones</a>
                      </div><!-- /.portfolio-cat -->
                    </div><!-- /.portfolio-content -->
                  </div><!-- /.portfolio-item -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.portfolio-grid-layout2 -->
            <div class="text__block mb-30">
              <h5 class="text__block-title">Descripción</h5>
              <p class="text__block-desc">La topografía es una disciplina fundamental que se encarga de medir y describir 
                detalladamente la superficie terrestre y otros elementos geográficos de un área específica. Su principal objetivo es recopilar datos 
                precisos sobre la forma y las características de la tierra, lo que proporciona información crucial para llevar a cabo proyectos de ingeniería
                 y construcción de manera eficiente y segura.</p>
            </div><!-- /.text-block -->

            <div class="fancybox-layout1">
              <div class="row">
                <!-- fancybox item #1 -->
                <div class="col-sm-4 col-md-4 col-lg-4">
                  <div class="fancybox-item">
                    <div class="fancybox__icon">
                      <i class="icon-welding"></i>
                    </div><!-- /.fancybox-icon -->
                    <div class="fancybox__content">
                      <h4 class="fancybox__title">Máxima<br>precisión</h4>
                      <p class="fancybox__desc">La topografía se enfoca en la medición de elevaciones, pendientes, distancias y otros parámetros relacionados con la superficie de la tierra.</p>
                    </div><!-- /.fancybox-content -->
                  </div><!-- /.fancybox-item -->
                </div><!-- /.col-lg-3 -->
                <!-- fancybox item #2 -->
                <div class="col-sm-4 col-md-4 col-lg-4">
                  <div class="fancybox-item">
                    <div class="fancybox__icon">
                      <i class="icon-checklist"></i>
                    </div><!-- /.fancybox-icon -->
                    <div class="fancybox__content">
                      <h4 class="fancybox__title">Crear Mapas<br>y Planos</h4>
                      <p class="fancybox__desc"> A partir de los datos topográficos recopilados, se crean mapas y planos detallados que representan la topografía del terreno. </p>
                    </div><!-- /.fancybox-content -->
                  </div><!-- /.fancybox-item -->
                </div><!-- /.col-lg-3 -->
                <!-- fancybox item #3 -->
                <div class="col-sm-4 col-md-4 col-lg-4">
                  <div class="fancybox-item">
                    <div class="fancybox__icon">
                      <i class="icon-wrench5"></i>
                    </div><!-- /.fancybox-icon -->
                    <div class="fancybox__content">
                      <h4 class="fancybox__title">Límites y<br>Propiedades</h4>
                      <p class="fancybox__desc">Esto es fundamental en proyectos de desarrollo urbano, agrícola o industrial, ya que ayuda a definir la propiedad y a cumplir con los requisitos legales.</p>
                    </div><!-- /.fancybox-content -->
                  </div><!-- /.fancybox-item -->
                </div><!-- /.col-lg-4 -->
              </div><!-- /.row -->
            </div><!-- /.fancybox-layout1  -->

            <h5 class="fz-25 mt-20">Preguntas Frecuentes</h5>
            <div id="accordion" class="mb-60">
              <div class="accordion-item">
                <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse1">
                  <a class="accordion__item-title" href="#">¿Cuándo es necesario hacer una medición de terrenos?</a>
                </div><!-- /.accordion-item-header -->
                <div id="collapse1" class="collapse" data-parent="#accordion">
                  <div class="accordion__item-body">
                    <p>Se realiza este servicio cuando se requiere elaborar planos perimétricos para presentar a registros públicos como TU propio terreno o planos de viviendas
                      para tener claros los límites de tu lote sobre el cual se puede construir, y seguir las normativas de construccion, como la del 30% de espacio de áreas libres.</p>
                  </div><!-- /.accordion-item-body -->
                </div>
              </div><!-- /.accordion-item -->
              <div class="accordion-item">
                <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse2">
                  <a class="accordion__item-title" href="#">¿Cuando tengo que hacer nivelación de terrenos?</a>
                </div><!-- /.accordion-item-header -->
                <div id="collapse2" class="collapse" data-parent="#accordion">
                  <div class="accordion__item-body">
                    <p>Generaelmente cuando se quiere saber el grado de inclinación y saber cómo es que se van a hacer las instalaciones sanitarias de una asociación o residencial.</p>
                  </div><!-- /.accordion-item-body -->
                </div>
              </div><!-- /.accordion-item -->
              <div class="accordion-item opened">
                <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse3">
                  <a class="accordion__item-title" href="#">¿Qué instrumentos usa la empresa para garantizar toda la precisión en la medición?</a>
                </div><!-- /.accordion-item-header -->
                <div id="collapse3" class="collapse show" data-parent="#accordion">
                  <div class="accordion__item-body">
                    <p>Las herramientas básicas de la topografía incluyen la estación total, el teodolito, el nivel de ingeniero, el GPS (Sistema de Posicionamiento Global) y la cinta métrica. Estos equipos se utilizan para medir distancias, ángulos y elevaciones.</p>
                  </div><!-- /.accordion-item-body -->
                </div>
              </div><!-- /.accordion-item -->
            </div><!-- /.accordion -->
            
            <div class="video-banner">
              <img src="../assets/images/banners/5.jpg" alt="banner">
              <a class="video__btn video__btn-white popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                <div class="video__player">
                  <span class="video__player-animation"></span>
                  <span class="video__player-animation video__player-animation-2"></span>
                  <i class="fa fa-play"></i>
                </div>
                <span class="video__btn-title color-white">Video Explicativo!</span>
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