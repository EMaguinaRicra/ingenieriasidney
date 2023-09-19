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
      <div class="bg-img"><img src="../assets/images/page-titles/s_planos.jpg" alt="background"></div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
            <h1 class="pagetitle__heading mb-0">Elaboración de Planos</h1>
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
            <h5 class="mb-40">Nuestro trabajos: Diseño de planos.</h5>
            <div class="portfolio-grid-layout2">
              <div class="row">
                <!-- portfolio item #1 -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="portfolio-item">
                    <div class="portfolio__img">
                      <img src="../assets/images/portfolio/grid/notext-4.jpg" alt="portfolio img">
                    </div><!-- /.portfolio-img -->
                    <div class="portfolio__content">
                      <h4 class="portfolio__title"><a href="#">Asociación Las Casuarinas</a></h4>
                      <div class="portfolio__cat">
                        <a href="#">Planos</a><a href="#">Medidición GPS</a>
                      </div><!-- /.portfolio-cat -->
                    </div><!-- /.portfolio-content -->
                  </div><!-- /.portfolio-item -->
                </div><!-- /.col-lg-4 -->
                <!-- portfolio item #2 -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="portfolio-item">
                    <div class="portfolio__img">
                      <img src="../assets/images/portfolio/grid/notext-8.jpg" alt="portfolio img">
                    </div><!-- /.portfolio-img -->
                    <div class="portfolio__content">
                      <h4 class="portfolio__title"><a href="#">Playa Hornillos</a></h4>
                      <div class="portfolio__cat">
                        <a href="#">Planos</a><a href="#">Casa de playa</a>
                      </div><!-- /.portfolio-cat -->
                    </div><!-- /.portfolio-content -->
                  </div><!-- /.portfolio-item -->
                </div><!-- /.col-lg-4 -->
                
            </div><!-- /.portfolio-grid-layout2 -->
            <div class="text__block mb-30">
              <h5 class="text__block-title">Planos perimétricos</h5>
              <p class="text__block-desc">
              <p>Los planos perimétricos, también conocidos como planos topográficos o de linderos, son representaciones gráficas que muestran las dimensiones, límites y características físicas de un terreno o parcela de tierra. Estos planos son utilizados principalmente para establecer los límites de una propiedad y determinar su superficie exacta.</p>
                <strong>Contenido típico:</strong>
                <ul>
                    <li>Límites del terreno con sus longitudes y ángulos.</li>
                    <li>Puntos de referencia, como esquinas y puntos clave.</li>
                    <li>Topografía del terreno, incluyendo elevaciones y pendientes.</li>
                    <li>Información sobre monumentos geodésicos o hitos.</li>
                    <li>Datos sobre servidumbres, restricciones legales o derechos de paso.</li>
                </ul>
                <strong>Uso:</strong>
                <p>Los planos perimétricos son esenciales para la legalización de propiedades, la subdivisión de terrenos, la planificación urbanística y la resolución de disputas limítrofes.</p>
              </p>
            </div><!-- /.text-block -->

            <div class="text__block mb-30">
              <h5 class="text__block-title">Planos de viviendas</h5>
              <p class="text__block-desc">
              <p>Los planos de vivienda son representaciones gráficas detalladas de una estructura arquitectónica, como una casa, un apartamento o un edificio. Estos planos muestran las dimensiones, la distribución de espacios, las características estructurales y otros detalles importantes de la vivienda.</p>
                <strong>Contenido típico:</strong>
                <ul>
                  <li>Distribución de habitaciones y espacios interiores.</li>
                  <li>Dimensiones de las habitaciones y áreas comunes.</li>
                  <li>Ubicación de puertas, ventanas y aberturas.</li>
                  <li>Detalles estructurales, como muros, columnas y vigas.</li>
                  <li>Sistemas eléctricos, de fontanería y HVAC (calefacción, ventilación y aire acondicionado).</li>
                </ul>
                <strong>Uso:</strong>
                <p>Los planos de vivienda son cruciales en la fase de diseño y construcción de edificaciones. Facilitan la comunicación entre arquitectos, ingenieros, contratistas y propietarios, garantizando que la construcción se realice de acuerdo con las especificaciones deseadas y las normativas vigentes.</p>
              </p>
            </div><!-- /.text-block -->

            <h5 class="fz-25 mt-20">Preguntas frecuentes sobre planos</h5>
            <div id="accordion" class="mb-60">
              <div class="accordion-item">
                <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse1">
                  <a class="accordion__item-title" href="#">¿Por qué necesito elaborar planos?</a>
                </div><!-- /.accordion-item-header -->
                <div id="collapse1" class="collapse" data-parent="#accordion">
                  <div class="accordion__item-body">
                    <p>
                    Los planos son fundamentales en la construcción porque proporcionan una guía visual y técnica para llevar a cabo un proyecto de manera precisa y eficiente. Ayudan a los profesionales de la construcción a entender el diseño, coordinar el trabajo, cumplir con regulaciones y normativas, y comunicar de manera efectiva los detalles del proyecto.
                    </p>
                  </div><!-- /.accordion-item-body -->
                </div>
              </div><!-- /.accordion-item -->
              <div class="accordion-item">
                <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse2">
                  <a class="accordion__item-title" href="#">Qué incluyen los planos de viviendas?</a>
                </div><!-- /.accordion-item-header -->
                <div id="collapse2" class="collapse" data-parent="#accordion">
                  <div class="accordion__item-body">
                    <p>
                    Los planos de construcción pueden incluir una variedad de información, como la disposición de habitaciones, dimensiones, ubicación de muros y estructuras, sistemas de agua, desagüe y electricidad, detalles de acabados, especificaciones de materiales, indicaciones de elevación, y notas de construcción.
                    </p>
                  </div><!-- /.accordion-item-body -->
                </div>
              </div><!-- /.accordion-item -->
              <div class="accordion-item opened">
                <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse3">
                  <a class="accordion__item-title" href="#">¿Quién es el encargado de la elaboración de planos?</a>
                </div><!-- /.accordion-item-header -->
                <div id="collapse3" class="collapse show" data-parent="#accordion">
                  <div class="accordion__item-body">
                    <p>
                    Los planos de construcción son creados por arquitectos, ingenieros, diseñadores de interiores y otros profesionales de la construcción con experiencia en diseño y planificación.<br>
                    Y en Ingeniería Sidney contamos con los mejores profesionales de todo el norte chico para llevar a cabo tus proyectos inmoviliarios.
                    </p>
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
                <span class="video__btn-title color-white">Video explicativo!</span>
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