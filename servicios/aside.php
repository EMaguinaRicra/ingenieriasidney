<div class="col-sm-12 col-md-12 col-lg-4">
          <aside class="sidebar mb-30">
              <div class="widget widget-categories">
                <h5 class="widget__title">Servicios</h5>
                <div class="widget-content">
                  <ul class="list-unstyled">
                  <?php $variable = $_SERVER['PHP_SELF']; ?>
                    <li>
                      <a href="construccion.php" class="<?php if(strpos($variable, "construccion") !== false) {
                        echo 'active';
                      } ?>"><span>Ejecución de obra</span><i class="icon-arrow-right"></i></a>
                    </li>
                    <li>
                      <a href="independizacion.php" class="<?php if(strpos($variable, "independizacion") !== false) {
                        echo 'active';
                      } ?>"><span>Independización</span><i class="icon-arrow-right"></i></a>
                    </li>
                    <li>
                      <a href="supervision.php" class="<?php if(strpos($variable, "supervision") !== false) {
                        echo 'active';
                      } ?>"><span>Supervisión de obra</span><i class="icon-arrow-right"></i></a>
                    </li>
                    <li>
                      <a href="planos.php" class="<?php if(strpos($variable, "planos") !== false) {
                        echo 'active';
                      } ?>">
                      <span>Diseño de Planos</span><i class="icon-arrow-right"></i></a>
                    </li>
                    <li>
                      <a href="interiores.php" class="<?php if(strpos($variable, "interiores") !== false) {
                        echo 'active';
                      } ?>"><span>Diseño de Interiores</span><i class="icon-arrow-right"></i></a>
                    </li>
                    <li>
                      <a href="topografia.php" class="<?php if(strpos($variable, "topografia") !== false) {
                        echo 'active';
                      } ?>"><span>Topografía</span><i class="icon-arrow-right"></i></a>
                    </li>
                  </ul>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-categories -->
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
              </div><!-- /.widget-download -->
            </aside><!-- /.sidebar -->
          </div><!-- /.col-lg-4 -->