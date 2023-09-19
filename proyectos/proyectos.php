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
      <div class="bg-img"><img src="../assets/images/page-titles/proyectos.jpg" alt="background"></div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
            <h1 class="pagetitle__heading">Proyectos<br>Realizados</h1>
            <a href="#projects" class="btn btn__primary btn__icon" id="btn-servicios">
              <span>Ver proyectos</span><i class="icon-arrow-right"></i>
            </a>
          </div><!-- /.col-xl-6 -->
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 cta__banner-wrapper d-flex justify-content-end">
            <div class="cta__banner">
              <div class="bg-img"><img src="../assets/images/backgrounds/1.jpg" alt="background"></div>
              <h5 class="cta__title">¡Aquí encontrarás nuestros mejores trabajos! </h5>
              <p class="cta__desc">Ingeniería Sidney.</p>
            </div><!-- /.cta__banner -->
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- =========================== 
      portfolio Grid 
    ============================= -->
    <section id="projects" class="portfolio-grid">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <ul class="portfolio-filter d-flex flex-wrap justify-content-center list-unstyled">
              <li><a class="filter active" href="#" data-filter="all">TODOS</a></li>
              <li><a class="filter" href="#" data-filter=".filter-1">Construcción</a></li>
              <li><a class="filter" href="#" data-filter=".filter-2">Planos</a></li>
              <li><a class="filter" href="#" data-filter=".filter-3">Independización</a></li>
              <li><a class="filter" href="#" data-filter=".filter-4">Supervisión</a></li>
              <li><a class="filter" href="#" data-filter=".filter-5">Interiores</a></li>
              <li><a class="filter" href="#" data-filter=".filter-6">Topografía</a></li>
            </ul><!-- /.portfolio-filter  -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
        <div id="filtered-items-wrap" class="row">
            <?php
            
                // Incluir archivo de conexión
                include("../conexion.php");
                
                // Armar la consulta
                $sql = "SELECT proyectos.*, categoria.nombre as nombre_categoria, ubicacion.nombre as nombre_ubicacion, cliente.nombre AS nombre_cliente, categoria.id as categoria_id, proyectos.id as proyecto_id, proyectos.nombre as proyectos_nombre
                  FROM proyectos
                  INNER JOIN categoria ON proyectos.categoria_id = categoria.id
                  INNER JOIN ubicacion ON proyectos.ubicacion_id = ubicacion.id
                  INNER JOIN cliente ON proyectos.cliente_id = cliente.id;";
                
                // Ejecutar la consulta
                $resultado = mysqli_query($conn, $sql);
                
                // Verificar si la consulta fue exitosa
                if (!$resultado) {
                    die("Error en la consulta: " . mysqli_error($conn));
                }
                
                // Obtener los datos de la consulta
                while ($fila = mysqli_fetch_assoc($resultado)) {
                    // Acceder a los datos del registro
                    //      echo "ID: " . $fila['id'] . "<br>";
                    //      echo "Nombre: " . $fila['titulo_proyecto'] . "<br>";
                    // ...
                    ?>
                        <div class="col-sm-6 col-md-6 col-lg-4 mix filter-<?php echo $fila['categoria_id']; ?>">
                            <div class="portfolio-item">
                                <div class="portfolio__img">
                                <img src="../assets/images/portfolio/grid/portada-<?php echo $fila['id']; ?>.jpg" loading="lazy" alt="portfolio img">
                                </div><!-- /.portfolio-img -->
                                <div class="portfolio__content">
                                <h4 class="portfolio__title"><a href="single.php?id=<?php echo $fila['id']; ?>" target="_blank"><?php echo $fila['proyectos_nombre']; ?></a></h4>
                                <div class="portfolio__cat">
                                    <a href="#"><?php echo $fila['nombre_categoria']; ?></a>
                                </div><!-- /.portfolio-cat -->
                                </div><!-- /.portfolio-content -->
                            </div><!-- /.portfolio-item -->
                        </div><!-- /.col-lg-4 -->       
                    <?php
                }

                // Liberar el resultado
                mysqli_free_result($resultado);
                
                // Cerrar la conexión
                mysqli_close($conn);
                
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