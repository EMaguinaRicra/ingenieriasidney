<?php
    // Obtener el ID del proyecto desde la URL
    $id = $_GET["id"];
    
    // Incluir el archivo de conexión a la base de datos
    include("../conexion.php");

    // Consulta a la base de datos utilizando sentencias preparadas
    $sql = "SELECT proyectos.*, categoria.nombre as nombre_categoria, 
            ubicacion.nombre as nombre_ubicacion, cliente.nombre AS nombre_cliente, 
            categoria.id as categoria_id, proyectos.nombre 
            as nombre_proyecto, proyectos.id as proyecto_id, categoria.icono as categoria_icono,
            proyectos.horas as proyecto_horas, proyectos.personal as proyecto_personal, proyectos.inversion as proyecto_inversion
        FROM proyectos
        INNER JOIN categoria ON proyectos.categoria_id = categoria.id
        INNER JOIN ubicacion ON proyectos.ubicacion_id = ubicacion.id
        INNER JOIN cliente ON proyectos.cliente_id = cliente.id
        WHERE proyectos.id = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    // Obtener los datos del proyecto en un arreglo asociativo
    $row = $result->fetch_assoc();
    
    // Realizar las operaciones necesarias con los datos obtenidos
    // ...
    

    // Imrpimir el título del proyecto desde la base de datos
    //echo $row['nombre_proyecto'];
  
?>

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
        Header (FALTA HACER UN HEADER 2 PARA ESTO Y PARA CONTACTO)
    =========================== -->
    <?php
      include("../includes/header2.php");
    ?>
<!-- /.Header -->


    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title page-title-layout8 text-center">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <nav>
              <ol class="breadcrumb justify-content-center mb-20">
                <li class="breadcrumb-item"><a href="../index.php">Inicio</a></li>
                <li class="breadcrumb-item"><a href="proyectos.php">Proyectos</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $row['nombre_proyecto']; ?></li>
              </ol>
            </nav>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ======================
     portfolio single
    ========================= -->
    <section class="portfolio-single pt-0 pb-50">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="portfolio-item">
            <div class="portfolio__img">
                <img src="../assets/images/portfolio/single/portada-<?php echo $id; ?>.jpg" alt="portfolio" class="img-fluid">
            </div>

              <div class="portfolio__icon">
                <?php echo $row['categoria_icono']; ?>
              </div>
              <div class="portfolio__content text-center">
                <h2 class="portfolio__title"><?php echo $row['nombre_proyecto']; ?></h2>
                <div class="portfolio__cat">
                  <a href="#"><?php echo $row['nombre_categoria']; ?></a>
                </div><!-- /.portfolio-cat -->
                <p class="portfolio__desc">Proyectos Ingeniería Sidney</p>
              </div><!-- /.portfolio-content -->
            </div><!-- /.portfolio-item  -->
            <div class="fancybox-layout2 mb-60">
              <div class="row">
                <!-- fancybox item #1 -->
                <div class="col-sm-12 col-md-12 col-lg-4">
                  <div class="fancybox-item">
                    <div class="fancybox__icon">
                      <i class="icon-welding"></i>
                    </div><!-- /.fancybox-icon -->
                    <div class="fancybox__content">
                      <h4 class="fancybox__title">Completa<br>seguridad</h4>
                    </div><!-- /.fancybox-content -->
                  </div><!-- /.fancybox-item -->
                </div><!-- /.col-lg-3 -->
                <!-- fancybox item #2 -->
                <div class="col-sm-12 col-md-12 col-lg-4">
                  <div class="fancybox-item">
                    <div class="fancybox__icon">
                      <i class="icon-checklist"></i>
                    </div><!-- /.fancybox-icon -->
                    <div class="fancybox__content">
                      <h4 class="fancybox__title">Organización<br>Profesional </h4>
                    </div><!-- /.fancybox-content -->
                  </div><!-- /.fancybox-item -->
                </div><!-- /.col-lg-3 -->
                <!-- fancybox item #3 -->
                <div class="col-sm-12 col-md-12 col-lg-4">
                  <div class="fancybox-item">
                    <div class="fancybox__icon">
                      <i class="icon-wrench5"></i>
                    </div><!-- /.fancybox-icon -->
                    <div class="fancybox__content">
                      <h4 class="fancybox__title">Descripción <br> y Resultados</h4>
                    </div><!-- /.fancybox-content -->
                  </div><!-- /.fancybox-item -->
                </div><!-- /.col-lg-4 -->
              </div><!-- /.row -->
            </div><!-- /.fancybox-layout2  -->
              <h2 class="portfolio__title">Galería</h2>

            <div class="portfolio-gallery">
              <div class="row">
                <!-- portfolio 9 items -->
                <?php
                  for ($i = 1; $i <= 9; $i++) {
                    // Declaración de la variable en bucle             
                ?>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="portfolio-item">
                            <div class="portfolio__img">
                                <a class="popup-gallery-item" href="../assets/images/portfolio/grid/Grid Single Project-<?php echo $id ?>_<?php echo $i ?>.jpg">
                                    <img src="../assets/images/portfolio/grid/Grid Single Project-<?php echo $id ?>_<?php echo $i ?>.jpg" alt="portfolio img">
                                </a>
                            </div><!-- /.portfolio-img -->
                        </div><!-- /.portfolio-item -->
                    </div><!-- /.col-lg-4 -->                        
                <?php
                  }
                ?>

              </div><!-- /.row -->
            </div><!-- /.portfolio gallery -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
        
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-9 offset-lg-2">
            <div class="text__block text__block-layout2 mb-70">
              <h5 class="text__block-title">Descripción</h5>
              <div class="text__block-content">
                <p class="text__block-desc">
                    <?php echo $row['descripcion']; ?>                                 
                </p>
                <ul class="portfolio__meta-list list-unstyled mt-30 mb-40">
                  <li><strong>Cliente:</strong><span><?php echo $row['nombre_cliente']; ?></span></li>
                  <li><strong>Ubicación:</strong><span><?php echo $row['nombre_ubicacion']; ?></span></li>
                  <li><strong>Servicios:</strong><span><?php echo $row['nombre_categoria']; ?></span></li>
                </ul>
                <a href="../contacto/contacto.php" class="btn btn__primary btn__icon btn__lg">
                  <span>Tengo un proyecto, quiero cotizar</span><i class="icon-arrow-right"></i>
                </a>
              </div>
            </div><!-- /.text-block -->
            <div class="text__block text__block-layout2 mb-50">
              <h5 class="text__block-title">Desafío</h5>
              <div class="text__block-content">
                <p class="text__block-desc">
                    <?php echo $row['desafio']; ?>
                </p>
                <ul class="list-items list-items-layout2 list-unstyled mb-30">
                  <li>Diseño de redes</li>
                  <li>Control Logístico</li>
                  <li>Planos computarizados</li>
                  <li>Innovación</li>
                  <li>Contratos de maquinarias</li>
                  <li>Ingeniería General</li>
                </ul>
              </div>
            </div><!-- /.text-block -->
          </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="portfolio-slider carousel-arrows-light slick-carousel mb-60"
              data-slick='{"slidesToShow": 1, "arrows": true, "dots": true, "centerMode": true, "centerPadding": "300px","responsive": [ {"breakpoint": 992, "settings": {"centerPadding": "40px"}}]}'>
              
              <?php
                for ($i = 1; $i <= 3; $i++) {
                  // Código a ejecutar
               ?>
                <img src="../assets/images/portfolio/slider/Slider Single Project-<?php echo $id ?>_<?php echo $i ?>.jpg" alt="slider">
              <?php
                }
              ?>

            </div><!-- /.portfolio-slider -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-9 offset-lg-2">
            <div class="text__block text__block-layout2 mb-50">
              <h5 class="text__block-title">Resultados</h5>
              <div class="text__block-content">
                <p class="text__block-desc">
                    <?php echo $row['resultado']; ?>
                </p>
                <div class="counters-layout2">
                  <div class="row">
                    <!-- counter item #1 -->
                    <div class="col-4">
                      <div class="counter-item">
                        <h4 class="counter"><?php echo $row['proyecto_horas']; ?></h4>
                        <p class="counter__desc">Horas del <br>proyecto</p>
                      </div>
                    </div><!-- /.col-sm-3 -->
                    <!-- counter item #2 -->
                    <div class="col-4">
                      <div class="counter-item">
                        <h4 class="counter"><?php echo $row['proyecto_personal']; ?></h4>
                        <p class="counter__desc">Empleados Calificados</p>
                      </div>
                    </div><!-- /.col-sm-3 -->
                    <!-- counter item #3 -->
                    <div class="col-4">
                      <div class="counter-item">
                        <h4 class="counter"><?php echo $row['proyecto_inversion']; ?></h4>
                        <p class="counter__desc">Inversión <br>Aproximada</p>
                      </div>
                    </div><!-- /.col-sm-3 -->
                  </div><!-- /.row -->
                </div><!-- /.counters-layout2 -->
              </div><!-- /.counters-layout2 -->
            </div><!-- /.text-block -->
          </div><!-- /.col-lg-8 -->
        </div> <!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.portfolio single -->

    <!-- =========================== 
      portfolio Grid 
    ============================= -->
    <section class="portfolio-grid pt-50 pb-50 border-top">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-40">
              <h2 class="heading__title fz-25">Proyectos Relacionados</h2>
            </div><!-- /heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">

        <?php
        
              // Realizar la consulta SQL para obtener los proyectos relacionados
              $sql = "SELECT id, nombre FROM proyectos WHERE proyectos.id != $id ORDER BY RAND() LIMIT 3";
              $result = mysqli_query($conn, $sql);

              // Verificar si hay resultados
              if (mysqli_num_rows($result) > 0) {
                  // Mostrar los proyectos relacionados
                  while ($row = mysqli_fetch_assoc($result)) {
          ?>
              <!-- portfolio item #1 -->
              <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="portfolio-item">
                  <div class="portfolio__img">
                    <img src="../assets/images/portfolio/grid/portada-<?php echo $row['id']; ?>.jpg" alt="portfolio img">
                  </div><!-- /.portfolio-img -->
                  <div class="portfolio__content">
                    <h4 class="portfolio__title"><a href="single.php?id=<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></a></h4>
                  </div><!-- /.portfolio-content -->
                </div><!-- /.portfolio-item -->
              </div><!-- /.col-lg-4 -->
          <?php
                }
            }
            // Cerrar la conexión a la base de datos
            $stmt->close();
            $conn->close();
            
          ?>
      </div><!-- /.container -->
    </section><!-- /.portfolio Grid -->

    <!-- ========================
      Footer
    ========================== -->
    <?php
    include("../includes/footer.php");
    ?>
</body>

</html>