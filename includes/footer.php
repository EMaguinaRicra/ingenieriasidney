    <!-- ========================
      Footer
    ========================== -->
    <footer class="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-4 footer__widget footer__widget-about">
              <div class="footer__widget-content">
                <img src="<?php if (strpos($variable, "index") == false) echo "../" ?>assets/images/logo/logo_footer.png" alt="logo" class="mb-30">
                <p class="mb-20">Dedicados a la Ingeniería Civil y Arquitectura, garantizamos el correcto desarrollo de todos sus proyectos.
                  Sigue nuestras redes sociales para saber más sobre nosotros y nuestro trabajo.
                </p>
                <ul class="social__icons list-unstyled">
                  <li><a href="https://www.facebook.com/ingenieriasidney"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="https://www.instagram.com/ingenieriasidney"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="https://wa.link/0nmzao"><i class="fa fa-whatsapp"></i></a></li>
                </ul><!-- /.social-icons -->
              </div>
            </div><!-- /.col-xl-4 -->
            <div class="col-6 col-sm-6 col-md-6 col-lg-2 col-xl-2 footer__widget footer__widget-nav">
              <h6 class="footer__widget-title">Servicios</h6>
              <div class="footer__widget-content">
                <nav>
                  <ul class="list-unstyled">
                    <li><a href="<?php if (strpos($variable, "index") == false) echo "../" ?>servicios/construccion.php">Ejecución de obras</a></li>
                    <li><a href="<?php if (strpos($variable, "index") == false) echo "../" ?>servicios/independizacion.php">Independización</a></li>
                    <li><a href="<?php if (strpos($variable, "index") == false) echo "../" ?>servicios/supervision.php">Supervisión de obras</a></li>
                    <li><a href="<?php if (strpos($variable, "index") == false) echo "../" ?>servicios/planos.php">Diseño de Planos</a></li>
                    <li><a href="<?php if (strpos($variable, "index") == false) echo "../" ?>servicios/interiores.php">Diseño de Interiores</a></li>
                    <li><a href="<?php if (strpos($variable, "index") == false) echo "../" ?>servicios/topografia.php">Topografía</a></li>
                  </ul>
                </nav>
              </div><!-- /.footer-widget-content -->
            </div><!-- /.col-xl-2 -->
            <div class="col-6 col-sm-6 col-md-6 col-lg-2 col-xl-2 footer__widget footer__widget-nav">
              <h6 class="footer__widget-title">Nosotros</h6>
              <div class="footer__widget-content">
                <nav>
                  <ul class="list-unstyled">
                    <li><a href="<?php if (strpos($variable, "index") == false) echo "../" ?>nosotros/nosotros.php">Conócenos</a></li>
                    <li><a href="<?php if (strpos($variable, "index") == false) echo "../" ?>nosotros/preguntas-frecuentes.php">Preguntas Frecuentes</a></li>  
                  </ul>
                </nav>
              </div><!-- /.footer-widget-content -->
            </div><!-- /.col-xl-2 -->
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 footer__widget footer__widget-newsletter">
              <h6 class="footer__widget-title">Contacto Rápido</h6>
              <div class="footer__widget-content">
                <p>Escríbenos tu correo y te contactaremos contigo lo más pronto posible del tema que quieras.</p>
                <form class="widget__newsletter-form">
                  <div class="form-group mb-0">
                    <input type="text" class="form-control" placeholder="Correo Electrónico">
                    <button type="submit" class="btn btn__primary">
                      <i class="icon-arrow-right"></i>
                    </button>
                  </div>
                </form>
              </div><!-- /.footer-widget-content -->
              <p class="text-right footer__more-info mt-20 mb-0">Si tienes dudas haz <a href="<?php if (strpos($variable, "index") == false) echo "../" ?>nosotros/preguntas-frecuentes.php">click aquí</a></p>
            </div><!-- /.col-xl-4 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.footer-top -->
      <div class="footer-bottom">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-12 d-flex flex-wrap justify-content-between">
              <nav>
                <ul class="footer__copyright-links list-unstyled d-flex flex-wrap mb-0">
                  <li><a href="<?php if (strpos($variable, "index") == false) echo "../" ?>t/terminos-condiciones.php">Términos y Condiciones </a></li>
                  <li><a href="<?php if (strpos($variable, "index") == false) echo "../" ?>t/privacidad.php">Política de Privacidad</a></li>
                </ul>
              </nav>
              <p class="mb-0 color-white"> &copy; 2023 Ingeniería Sidney. Hecho con 🤍 por
                <a href="https://emaguinaricra.github.io/portfolio/">Eloy Maguiña Ricra</a>
              </p>
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.Footer-bottom -->
    </footer><!-- /.Footer -->

    <button id="scrollTopBtn"><i class="fa fa-long-arrow-up"></i></button>

  </div><!-- /.wrapper -->

  <script src="<?php if (strpos($variable, "index") == false) echo "../" ?>assets/js/jquery-3.5.1.min.js"></script>
  <script src="<?php if (strpos($variable, "index") == false) echo "../" ?>assets/js/plugins.js"></script>
  <script src="<?php if (strpos($variable, "index") == false) echo "../" ?>assets/js/main.js"></script>