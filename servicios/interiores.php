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
      <div class="bg-img"><img src="../assets/images/page-titles/s_interiores.jpg" alt="background"></div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
            <h1 class="pagetitle__heading mb-0">Diseño de Interiores</h1>
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
            <h5 class="mb-40">Nuestros trabajos: Diseño de Interiores.</h5>
            <div class="portfolio-grid-layout2">
              <div class="row">
                <!-- portfolio item #1 -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="portfolio-item">
                    <div class="portfolio__img">
                      <img src="../assets/images/portfolio/grid/notext-7.jpg" alt="portfolio img">
                    </div><!-- /.portfolio-img -->
                    <div class="portfolio__content">
                      <h4 class="portfolio__title"><a href="#">Hotel Miami</a></h4>
                      <div class="portfolio__cat">
                        <a href="#">Diseño de Interiores</a><a href="#">Mantenimiento</a>
                      </div><!-- /.portfolio-cat -->
                    </div><!-- /.portfolio-content -->
                  </div><!-- /.portfolio-item -->
                </div><!-- /.col-lg-4 -->
              </div><!-- /.row -->
            </div><!-- /.portfolio-grid-layout2 -->
            <div class="text__block mb-30">
              <h5 class="text__block-title">Descripción</h5>
              <p class="text__block-desc">
                El diseño de interiores es una disciplina creativa y técnica que se enfoca en mejorar y optimizar el espacio interior de un lugar, ya sea una vivienda, una oficina, 
                un restaurante, una tienda o cualquier otro tipo de ambiente. Su objetivo principal es crear entornos funcionales, estéticos y armoniosos que satisfagan las necesidades y 
                deseos de los usuarios, considerando aspectos como la distribución del espacio, la selección de mobiliario, los colores, la iluminación, los materiales y otros elementos decorativos.  
              </p>
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
                      <h4 class="fancybox__title">Planificación<br>Espacial</h4>
                      <p class="fancybox__desc">Determinar cómo se organizarán y distribuirán los espacios dentro de un ambiente para que sean funcionales y eficientes. Esto implica decidir la ubicación de puertas, ventanas, paredes, y la disposición del mobiliario.</p>
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
                      <h4 class="fancybox__title">Colores y<br>Materiales </h4>
                      <p class="fancybox__desc">Seleccionar los colores de las paredes, suelos y techos, así como los materiales de revestimiento y acabados, para crear una atmósfera coherente y agradable.</p>
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
                      <h4 class="fancybox__title">Diseño de<br>iluminación</h4>
                      <p class="fancybox__desc">Planificar la iluminación adecuada para el espacio, considerando la iluminación general, la iluminación ambiental y la iluminación puntual para destacar áreas específicas.</p>
                    </div><!-- /.fancybox-content -->
                  </div><!-- /.fancybox-item -->
                </div><!-- /.col-lg-4 -->
              </div><!-- /.row -->
            </div><!-- /.fancybox-layout1  -->

            <h5 class="fz-25 mt-20">Preguntas frecuentes</h5>
            <div id="accordion" class="mb-60">
              <div class="accordion-item">
                <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse1">
                  <a class="accordion__item-title" href="#">¿Cuánto cuesta contratar a un diseñador de interiores?</a>
                </div><!-- /.accordion-item-header -->
                <div id="collapse1" class="collapse" data-parent="#accordion">
                  <div class="accordion__item-body">
                    <p>El costo de contratar un diseñador de interiores puede variar ampliamente según la ubicación, la experiencia del diseñador y 
                      el alcance del proyecto. Por lo general, se cobra por hora de trabajo o mediante tarifas fijas para proyectos específicos. 
                      En nuestra empresa manejamos presupuestos flexibles para todos nuestros clientes y sus necesidades.</p>
                  </div><!-- /.accordion-item-body -->
                </div>
              </div><!-- /.accordion-item -->
              <div class="accordion-item">
                <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse2">
                  <a class="accordion__item-title" href="#">¿Qué se debe tener en cuenta al elegir colores para una habitación?</a>
                </div><!-- /.accordion-item-header -->
                <div id="collapse2" class="collapse" data-parent="#accordion">
                  <div class="accordion__item-body">
                    <p>Al elegir colores para una habitación, es importante considerar la cantidad de luz natural, el tamaño de la habitación y el ambiente deseado. Colores más claros tienden a hacer que un espacio se sienta más grande y luminoso, mientras que colores más oscuros pueden crear una atmósfera acogedora pero pueden hacer que un espacio parezca más pequeño.</p>
                  </div><!-- /.accordion-item-body -->
                </div>
              </div><!-- /.accordion-item -->
              <div class="accordion-item opened">
                <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse3">
                  <a class="accordion__item-title" href="#">¿Cuáles son las tendencias actuales en diseño de interiores?</a>
                </div><!-- /.accordion-item-header -->
                <div id="collapse3" class="collapse show" data-parent="#accordion">
                  <div class="accordion__item-body">
                    <p>Las tendencias en diseño de interiores pueden cambiar con el tiempo, pero algunas de las tendencias actuales incluyen el uso de colores neutros y naturales, la incorporación de elementos sostenibles, el diseño minimalista, la mezcla de estilos (como el "eclecticismo") y la integración de la tecnología en el hogar.</p>
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