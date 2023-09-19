<!DOCTYPE html>
<html lang="en">

<!-- =========================
  Head
=========================== -->    
<?php
    include("includes/head.php");
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
        include("includes/header.php");
    ?>

    <!-- ============================
        Slider
    ============================== -->
    <section class="slider slider-layout1">
      <div class="slick-carousel carousel-arrows-light m-slides-0"
        data-slick='{"slidesToShow": 1, "arrows": true, "dots": true, "speed": 700,"fade": true,"cssEase": "linear"}'>
        <div class="slide-item align-v-h bg-overlay bg-overlay-2">
          <div class="bg-img"><img src="assets/images/sliders/s1.jpg" alt="slide img"></div>
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-9">
                <div class="slide__content">
                  <h2 class="slide__title">Ingeniería Sidney</h2>
                  <p class="slide__desc">Empresa con profesionales de más de 10 años de experiencia en proyectos de vivienda y saneamiento.</p>
                  <a href="servicios/servicios.php" class="btn btn__primary btn__icon btn__lg mr-30">
                    <span>Servicios</span><i class="icon-arrow-right"></i>
                  </a>
                  <a href="nosotros/nosotros.php" class="btn btn__white">Conócenos!</a>
                </div><!-- /.slide-content -->
              </div><!-- /.col-xl-9 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
        <div class="slide-item align-v-h bg-overlay">
          <div class="bg-img"><img src="assets/images/sliders/s2.jpg" alt="slide img"></div>
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-9">
                <div class="slide__content">
                  <h2 class="slide__title">Empresa Consultora</h2>
                  <p class="slide__desc">Asesoría durante todo tu proyecto. <br> Planos, construcción o independización de viviendas.</p>
                  <a href="servicios/servicios.php" class="btn btn__primary btn__icon btn__lg mr-30">
                    <span>Servicios</span><i class="icon-arrow-right"></i>
                  </a>
                  <a href="nosotros/nosotros.php" class="btn btn__white">Conócenos!</a>
                </div><!-- /.slide-content -->
              </div><!-- /.col-xl-9 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
      </div><!-- /.carousel -->
    </section><!-- /.slider -->

    <!-- ==========================
       Contact Info
    ============================ -->
    <section class="contact-info-layout2 pt-60 pb-30">
      <div class="container">
        <div class="row align-items-end">
          <!-- Contact panel #1 -->
          <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="contact-info-box d-flex align-items-center">
              <div class="contact__info-box-icon">
                <i class="icon-envelope"></i>
              </div>
              <div class="contact__info-box-content">
                <h4 class="contact__info-box-title">Correo Electrónico</h4>
                <ul class="contact__info-list list-unstyled">
                  <li><a href="mailto:ingenieria@esgsidney.com">ingenieria@esgsidney.com</a></li>
                  <li>Teléfono: <a href="tel:925148769">925 148 769</a></li>
                </ul><!-- /.contact__info-list -->
              </div><!-- /.contact__info-box-content -->
            </div><!-- /.contact-info-box -->
          </div><!-- /.col-lg-3 -->
          <!-- Contact panel #2 -->
          <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="contact-info-box d-flex align-items-center">
              <div class="contact__info-box-icon">
                <i class="icon-location"></i>
              </div>
              <div class="contact__info-box-content">
                <h4 class="contact__info-box-title">Asesoría Gratis</h4>
                <ul class="contact__info-list list-unstyled">
                  <li>A.H, Leoncio Prado LT 12 <br> Huacho</li>
                </ul><!-- /.contact__info-list -->
              </div><!-- /.contact__info-box-content -->
            </div><!-- /.contact-info-box -->
          </div><!-- /.col-lg-3 -->
          <!-- Contact panel #3 -->
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="cta__banner">
              <h5 class="cta__title color-white">Independizamos tu vivienda</h5>
              <p class="cta__desc color-gray">Evita los problemas legales y dale más tranquilidad a tu familia.</p>
              <a href="servicios/servicios.php" target="_blank" class="btn btn__primary btn__link color-white">
                <span>Aprende cómo</span> <i class="icon-arrow-right"></i>
              </a>
            </div><!-- /.cta__banner -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Contact Info -->

    <!-- ========================
        Services Layout 2
    =========================== -->
    <section class="services-layout2 pt-120 bg-gray">
      <div class="services-bg">
        <div class="bg-img"><img src="assets/images/backgrounds/map.png" alt="background"></div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
            <div class="heading text-center mb-40">
              <span class="heading__subtitle">Servicios Profesionales</span>
              <h2 class="heading__title">¡Ingeniería Civil - Arquitectura!</h2>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-10 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="service-item">
              <div class="service__content">
                <div class="service__icon">
                  <i class="icon-brick-wall"></i>
                </div><!-- /.service__icon -->
                <h4 class="service__title">Arquitectura<br>Construcción</h4>
                <p class="service__desc">Viviendas, residenciales, o incluso negocios. Adecuamos los proyectos a todo
                  lo que el cliente se pueda imaginar.</p>
                <a href="servicios/construccion.php" class="btn btn__secondary btn__link">
                  <span>Contactar</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.service-content -->
              <div class="service__overlay bg-overlay bg-overlay-theme">
                <div class="bg-img"><img src="assets/images/services/s4.jpg" alt="background"></div>
              </div><!-- /.service__overlay -->
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="service-item">
              <div class="service__content">
                <div class="service__icon">
                  <i class="icon-engineer3"></i>
                </div><!-- /.service__icon -->
                <h4 class="service__title">Independización<br>de Predios</h4>
                <p class="service__desc">Gestionamos todo el trámite necesario para la independización de tu vivienda para tu familia.</p>
                <a href="servicios/independizacion.php" class="btn btn__secondary btn__link">
                  <span>Contactar</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.service-content -->
              <div class="service__overlay bg-overlay bg-overlay-theme">
                <div class="bg-img"><img src="assets/images/services/s3.jpg" alt="background"></div>
              </div><!-- /.service__overlay -->
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="service-item">
              <div class="service__content">
                <div class="service__icon">
                  <i class="icon-building"></i>
                </div><!-- /.service__icon -->
                <h4 class="service__title">Diseño<br> de Planos</h4>
                <p class="service__desc">También nos encargamos de la correcta ejecución de obras de nuestro cliente, con información clara y confiable.</p>
                <a href="servicios/planos.php" class="btn btn__secondary btn__link">
                  <span>Contactar</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.service-content -->
              <div class="service__overlay bg-overlay bg-overlay-theme">
                <div class="bg-img"><img src="assets/images/services/s2.jpg" alt="background"></div>
              </div><!-- /.service__overlay -->
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 text-center">
            <p class="text__link">Ofreciendo las mejores soluciones en saneamiento e ingeniería. <a href="contacto/contacto.php">Empieza tu 
              sueño ahora!</a>
            </p>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Services Layout 2 -->


    <div>
      <div class="bg-img background-size-auto"><img src="assets/images/backgrounds/1.jpg" alt="background"></div>

      <!-- ==========================
        contact layout 1
      =========================== -->
      <section class="contact-layout2 p-0">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <div class="contact-panel mt--140">
                <div class="contact__panel-info">
                  <div class="contact__panel-info-top">
                    <div class="contact-info-box">
                      <h4 class="contact__info-box-title">Oficina Principal</h4>
                      <ul class="contact__info-list list-unstyled">
                        <li>A.H. Leoncio Prado LT 12 <br> Huacho.</li>
                      </ul><!-- /.contact__info-list -->
                    </div><!-- /.contact-info-box -->
                    <div class="contact-info-box">
                      <h4 class="contact__info-box-title">Correo Electrónico</h4>
                      <ul class="contact__info-list list-unstyled">
                        <li>Email: <a href="mailto:ingenieria@esgsidney.com">ingenieria@esgsidney.com</a></li>
                      </ul><!-- /.contact__info-list -->
                    </div><!-- /.contact-info-box -->
                  </div><!-- /.contact__panel-info-top -->
                  <div class="contact__panel-info-bottom bg-theme2">
                    <small class="contact__panel-info-title">Nos comunicaremos pronto <strong>contigo!</strong></small>
                    <div class="contact__number d-flex align-items-center">
                      <i class="icon-phone"></i>
                      <a href="tel:+51925148769">Llamar</a>
                    </div>
                  </div><!-- /.contact__panel-info-bottom -->
                </div><!-- /.contact__panel-info -->
                <form class="contact__panel-form" id="contact-form">
                  <div class="row">
                    <div class="col-sm-12">
                      <h4 class="contact__panel-title">Asesoría Gratis</h4>
                      <p class="contact__panel-desc mb-40">Si aún tienes dudas de como trabajar con nosotros, escríbenos a continuación y nosotros te responderemos
                          o agendaremos una reunión contigo lo antes posible
                      </p>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nombre" id="contact-name" name="user_name"
                          required>
                      </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" id="contact-email"
                          name="user_email" required>
                      </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Teléfono" id="contact-Phone"
                          name="contact-phone" required>
                      </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="form-group">
                          <select class="form-control" style="display: none;" name="user_subject">
                            <option selected disabled>Elige tu Categoría</option>
                            <option>Diseño de planos</option>
                            <option>Independización</option>
                            <option>Interiores</option>
                            <option>Topografía</option>
                            <option>Otro (Especificar en el mensaje)</option>
                          </select>
                        </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-12 col-md-12 col-lg-12">
                      <div class="form-group">
                        <textarea class="form-control" placeholder="Cuéntanos sobre tu proyecto!"
                          id="contact-messgae" name="user_message" required></textarea>
                      </div>
                    </div><!-- /.col-lg-12 -->
                    <p class="contact__message" id="contact-message"></p>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                      <button type="submit" class="btn btn__primary btn__block  btn__lg">
                        <span class="mx-2">Enviar Formulario</span><i class="icon-arrow-right mx-2"></i>
                      </button>
                      <div class="contact-result"></div>
                    </div><!-- /.col-lg-12 -->
                  </div><!-- /.row -->
                </form>
              </div><!-- /.contact__panel -->
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.contact layout 2 -->

      <!-- ==========================
        Testimonial
      =========================== -->


    <!-- ========================= 
            Google Map
    =========================  -->

    <br><br><br><br><br>
    <section class="google-map-layout2 p-0">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 ">
            <div class="contact-info-carousel">
              <h5 class="contact__info-title">Nuestras Oficinas</h5>
              <div class="slick-carousel" data-slick='{"slidesToShow": 1, "arrows": true, "dots": false}'>
                <div class="contact-info-box">
                  <h4 class="contact__info-box-title">Oficina Principal</h4>
                  <ul class="contact__info-list list-unstyled">
                    <li>A.H. Leoncio Prado D-12 <br> Huacho. Lima</li>
                    <li>Email: <a href="mailto:ingenieria@esgsidney.com">ingenieria@esgsidney.com</a></li>
                    <li>Lun-Vie:  9am – 6pm</li>
                  </ul><!-- /.contact__info-list -->
                </div><!-- /.contact-info-box -->
                <div class="contact-info-box">
                  <h4 class="contact__info-box-title">Oficina Norte Chico</h4>
                  <ul class="contact__info-list list-unstyled">
                    <li>Asoc. Domingo Mandamiento Sipán G-11, Huacho. Lima</li>
                    <li>Email: <a href="mailto:ingenieria@esgsidney.com">ingenieria@esgsidney.com</a></li>
                    <li>Sábados:  10am – 2pm</li>
                  </ul><!-- /.contact__info-list -->
                </div><!-- /.contact-info-box -->
              </div><!-- /.slick-carousel -->
            </div><!-- /.contact-info-carousel -->
            <div id="map" style="height: 460px;"></div>
            <script src="assets/js/google-map.js"></script>
             <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAzqAWiuaFRk8u1bzqKJF5HgBTJ2pY4OwU&callback=initMap" async
              defer></script>
            <!-- CLICK HERE (https://developers.google.com/maps/documentation/embed/get-api-key) TO  LERAN MORE ABOUT GOOGLE MAPS API KEY -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.GoogleMap -->

    <!-- ====================== EMAIL JS ========================= -->    

    <script src="assets/js/emailjs.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

    <!-- =========================
        Footer
    =========================== -->    
    <?php
        include("includes/footer.php");
    ?>
    
</body>

</html>