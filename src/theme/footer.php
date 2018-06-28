<footer class="footer">
      <div class="footer__links">
      <div class="footer__links__keywords">
          <h5>Servicios</h5>
          <ul>
            <li data-aos="fade-up-slow" data-aos-offset="0" class="aos-init aos-animate">Estadisticas de Futbol</li>
            <li data-aos="fade-up-slow" data-aos-offset="0" class="aos-init aos-animate">Data Futbol</li>
            <li data-aos="fade-up-slow" data-aos-offset="0" class="aos-init aos-animate">Liga mx</li>
            <li data-aos="fade-up-slow" data-aos-offset="0" class="aos-init aos-animate">La liga</li>
            <li data-aos="fade-up-slow" data-aos-offset="0" class="aos-init aos-animate">Futbol de Estufa</li>
          </ul>
        </div>
        <div class="footer__links__menu">
          <h5>Data Futbol</h5>
          <ul>
            <li data-aos="fade-up-slow" data-aos-offset="0" class="aos-init aos-animate">Acerca de</li>
            <li data-aos="fade-up-slow" data-aos-offset="0" class="aos-init aos-animate">Privacidad</li>
            <li data-aos="fade-up-slow" data-aos-offset="0" class="aos-init aos-animate">Liga mx</li>
            <li data-aos="fade-up-slow" data-aos-offset="0" class="aos-init aos-animate">La liga</li>
            <li data-aos="fade-up-slow" data-aos-offset="0" class="aos-init aos-animate">Contacto</li>
          </ul>
        </div>


        <div class="footer__links__social">
          <h5>Siguenos</h5>
          <?php 
            $args =array(
              'theme_location' => 'social-menu',
              'container' => 'nav',
              'before' => '<i class="fab"></i> '
            );
            wp_nav_menu($args);
          ?>
          <!-- <ul>
            <li data-aos="fade-up-slow" data-aos-offset="0" class="aos-init aos-animate">Facebook</li>
            <li data-aos="fade-up-slow" data-aos-offset="0" class="aos-init aos-animate">Twitter</li>
            <li data-aos="fade-up-slow" data-aos-offset="0" class="aos-init aos-animate">Instagram</li>
          </ul> -->
          </div>


        <div class="footer__links__contacto">
          <h5>Escribenos</h5>
            <p>hola@datafutbol.club</p>
        </div>
        <div class="header__logo"><img src="https://www.uplabs.com/logos/uplabs/default--color.svg" alt="Logo"></div>
      </div>
      <div class="footer__copyrigth">
        <p>Derechos Reservados &#169 <?php echo date('Y'); ?> <br> <span> Code + Design By <a href="">AdanUriPlata</a></span></p>
      </div>
    </footer>
  </div> 
  <?php wp_footer(); ?>