<!DOCTYPE html>
<html lang="en">

<title>Preguntas Frecuentes</title>
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
    <section class="page-title page-title-layout4 bg-overlay bg-overlay-4 bg-parallax text-center">
      <div class="bg-img"><img src="../assets/images/page-titles/5.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 offset-xl-3">
            <h1 class="pagetitle__heading">Respuestas a Preguntas Frecuentes </h1>
            <nav>
              <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="../index.php">Inicio</a></li>
                <li class="breadcrumb-item"><a href="nosotros.php">Nosotros</a></li>
                <li class="breadcrumb-item active" aria-current="page">Preguntas</li>
              </ol>
            </nav>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ======================
       FAQ
    ========================= -->
    <section class="faq">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-4">
            <aside class="sidebar mb-30">
              <div class="widget widget-help bg-theme">
                <div class="widget__content">
                  <h5>Estimado usuario</h5>
                  <p>Si quieres conversar con más detalles sobre tu proyecto.</p>
                  <a href="../contacto/contacto.php" class="btn btn__white btn__link">
                    <span class="color-white">Contactar</span> <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.widget-download -->
              </div><!-- /.widget-help -->
              <div class="widget widget-download">
                <h5 class="widget__title">Descargas</h5>
                <div class="widget__content">
                  <a download="" href="../assets/pdf/curriculumsidney.pdf" class="btn btn__primary btn__block mb-20">
                    <span>Curriculum Empresarial</span>
                    <img src="../assets/images/icons/pdf.png" alt="pdf">
                  </a>
                  <a download href="../assets/pdf/Brochure Ingenieria Sidney.pdf" class="btn btn__secondary btn__block btn__hover3">
                    <span>Brochure 2023</span>
                    <img src="../assets/images/icons/pdf.png" alt="pdf">
                  </a>
                </div><!-- /.widget-content -->
            </aside><!-- /.sidebar -->
          </div><!-- /.col-lg-4 -->
          <div id="accordion" class="col-sm-12 col-md-12 col-lg-8">
            <div class="accordion-item">
              <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse1">
                <a class="accordion__item-title" href="#">¿Cómo puedo confiar en su calidad profesional?</a>
              </div><!-- /.accordion-item-header -->
              <div id="collapse1" class="collapse" data-parent="#accordion">
                <div class="accordion__item-body">
                  <p>Puedes visitar el área de Proyectos y ver cuantos grandes trabajos hemos llevado a cabo. También en nuestras redes sociales</p>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
            <div class="accordion-item">
              <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse2">
                <a class="accordion__item-title" href="#">¿Las asesorías o reuniones también se pagan?</a>
              </div><!-- /.accordion-item-header -->
              <div id="collapse2" class="collapse" data-parent="#accordion">
                <div class="accordion__item-body">
                  <p>Nuestros clientes (o personas que aún no son clientes) tienen la oportunidad de comunicarse con nosotros y aclarar
                    sus dudas sin tener que pagar un adicional por nuestras aclaraciones. 
                  </p>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
            <div class="accordion-item opened">
              <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse3">
                <a class="accordion__item-title" href="#">Si necesito ayuda para que aprueben mis planos, ¿puedo contar con ustedes?</a>
              </div><!-- /.accordion-item-header -->
              <div id="collapse3" class="collapse show" data-parent="#accordion">
                <div class="accordion__item-body">
                  <p>Luego de la entrega de planos, si tienes dudas podemos indicarte el proceso correcto a seguir para que los aprueben
                    en tu respectiva municipalidad y poder empezar con la ejecución de obra lo antes posible</p>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
            <div class="accordion-item">
              <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse4">
                <a class="accordion__item-title" href="#">¿Y si tengo planos que quisiera modificar o mejorar?</a>
              </div><!-- /.accordion-item-header -->
              <div id="collapse4" class="collapse" data-parent="#accordion">
                <div class="accordion__item-body">
                  <p>Cada servicio que necesites será analizado detenidamente para brindarte la mejor solución posible</p>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
            <div class="accordion-item">
              <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse5">
                <a class="accordion__item-title" href="#">¿Me costará mucho más el diseño de planos si mi terreno es muy grande?</a>
              </div><!-- /.accordion-item-header -->
              <div id="collapse5" class="collapse" data-parent="#accordion">
                <div class="accordion__item-body">
                  <p>Si decides trabajar con nosotros, estamos seguros que en nuestras reuniones podremos conversar bien lo que realmente quieres y 
                    a la vez nos adaptaremos tanto al terreno como a lo que planes invertir para el desarrollo de planos o ejecución de obra.
                  </p>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
            <div class="accordion-item">
              <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse6">
                <a class="accordion__item-title" href="#">¿Si ustedes hacen mis planos, también tendré que hacer la ejecución de obra con ustedes?</a>
              </div><!-- /.accordion-item-header -->
              <div id="collapse6" class="collapse" data-parent="#accordion">
                <div class="accordion__item-body">
                  <p>Si eres cliente y solo te interesa hacer los planos de tu vivienda o negocio, estaremos solo para eso. No hay ningún contrato que Luego
                    te ligue a seguir trabajando con nosotros si no lo deseas, aunque estamos seguros que te gustará la idea que tenemos para esas situaciones.
                  </p>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
            <div class="accordion-item">
              <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse7">
                <a class="accordion__item-title" href="#">Entonces, ¿como haría la construcción con ustedes?</a>
              </div><!-- /.accordion-item-header -->
              <div id="collapse7" class="collapse" data-parent="#accordion">
                <div class="accordion__item-body">
                  <p>Nosotros queremos brindar lo mejor siempre para los clientes, por lo que les damos la opción de que ellos mismos busquen ofertas de otras empresas o maestros de obras,
                    para así nosotros poder mejorar esa oferta aún más si está en nuestro alcance.
                  </p>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
            <div class="accordion-item">
              <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse8">
                <a class="accordion__item-title" href="#">¿Trabajan con métodos de pagos seguros?</a>
              </div><!-- /.accordion-item-header -->
              <div id="collapse8" class="collapse" data-parent="#accordion">
                <div class="accordion__item-body">
                  <p>Claro que sí, al aceptar trabajar con nosotros, el desarrollo de planos por ejemplo, le cobramos el inicial cuando usted acepte el Anteproyecto que 
                    nosotros diseñamos para su terreno, y el resto del pago cuando le hacemos la entrega de todos los planos que mencionamos en nuestros servicios.
                  </p>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
          </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.FAQ -->


    <!-- ========================
      Footer
    ========================== -->
    <?php
        include("../includes/footer.php");
    ?>

</body>

</html>