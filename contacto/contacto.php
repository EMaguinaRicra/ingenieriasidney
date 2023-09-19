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
    include("../includes/header2.php");
    ?>


    <!-- ========================= 
            Google Map
    =========================  -->
    <section class="google-map p-0">
      <div id="map" style="height: 500px;"></div>
      <script src="../assets/js/google-map.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAzqAWiuaFRk8u1bzqKJF5HgBTJ2pY4OwU&callback=initMap" async
      defer></script>
    <!-- CLICK HERE (https://developers.google.com/maps/documentation/embed/get-api-key) TO  LERAN MORE ABOUT GOOGLE MAPS API KEY -->
    </section><!-- /.GoogleMap -->

    <!-- ==========================
        contact layout 1
    =========================== -->
    <section class="contact-layout1 pt-0 pb-70">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="contact-panel">
              <div class="contact__panel-info">
                <div class="contact__panel-info-top">
                  <div class="contact-info-box">
                    <h4 class="contact__info-box-title">Oficina Principal</h4>
                    <ul class="contact__info-list list-unstyled">
                      <li>A.H, Leoncio Prado D-12 <br> Huacho. Lima</li>
                    </ul><!-- /.contact__info-list -->
                  </div><!-- /.contact-info-box -->
                  <div class="contact-info-box">
                    <h4 class="contact__info-box-title">Correo Electrónico</h4>
                    <ul class="contact__info-list list-unstyled">
                      <li>Email: <a href="mailto:ingenieria@esgsidney.com">ingenieria@esgsidney.com</a></li>
                    </ul><!-- /.contact__info-list -->
                  </div><!-- /.contact-info-box -->
                </div><!-- /.contact__panel-info-top -->
                <div class="contact__panel-info-bottom">
                  <strong class="contact__panel-info-title">Nos pondremos en contacto contigo en un lapso de 24 horas, o llámanos
                    todos los días, 09:00 AM - 2:00 PM</strong>
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
    </section><!-- /.contact layout 1 -->

    <!-- ==========================
       Contact Info
    ============================ -->
    <section class="contact-info pt-0 pb-70">
      <div class="container">
        <div class="row">
          <!-- Contact panel #1 -->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="contact-info-box">
              <h4 class="contact__info-box-title">Oficina Principal</h4>
              <ul class="contact__info-list list-unstyled">
                <li>A.H, Jr. Coronel Leoncio Prado D-12, Huacho.</li>
                <li>Teléfono: <a href="tel:922634897">922 634 897</a></li>
                <li>Lunes-Viernes: 9am – 5pm</li>
                <li>Sábados: 10am – 2pm</li>
              </ul><!-- /.contact__info-list -->
            </div><!-- /.contact-info-box -->
          </div><!-- /.col-lg-4 -->
          <!-- Contact panel #2 -->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="contact-info-box">
              <h4 class="contact__info-box-title">Oficina Huacho</h4>
              <ul class="contact__info-list list-unstyled">
                <li>Asoc. Domingo Mandamiento Sipán. G-11</li>
                <li>Teléfono: <a href="tel:925148769">925 148 769</a></li>
                <li>Lunes-Viernes: 9am – 5pm</li>
                <li>Sábados: 10am – 2pm</li>
              </ul><!-- /.contact__info-list -->
            </div><!-- /.contact-info-box -->
          </div><!-- /.col-lg-4 -->
          <!-- Contact panel #3 -->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="contact-info-box">
              <h4 class="contact__info-box-title">Oficina Santa María</h4>
              <ul class="contact__info-list list-unstyled">
                <li>Calle Irene Salvador s/n. Crda 15 - C-17</li>
                <li>Teléfono: <a href="tel:977672825">977 672 825</a></li>
                <li>Lunes-Viernes: 9am – 5pm</li>
                <li>Sábados: 10am – 2pm</li>
              </ul><!-- /.contact__info-list -->
            </div><!-- /.contact-info-box -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Contact Info -->

    <!-- ====================== EMAIL JS ========================= -->    

    <script src="/ingenieriasidney/assets/js/emailjs.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>


    <!-- ========================
      Footer
    ========================== -->
    <?php
        include("../includes/footer.php");
    ?>

  
</body>

</html>