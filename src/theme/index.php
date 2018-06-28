<?php get_header(); ?>
  <main class="main-index">
    <div class="hero">
      <div class="hero__title" data-aos="zoom-in">DATA FUTBOL</div>
    </div>
    <?php 
      $args = array(
        'theme_location' => 'header-menu',
        'container' => 'nav',
        'container_class' => 'menu-category'
      );
      wp_nav_menu($args);
    ?>
    <!-- <nav class="menu-category">
        <div class="menu-category__item" data-aos="fade-up"  data-aos-delay="400"><a href="">Estadisticas</a href=""></div>
        <div class="menu-category__item" data-aos="fade-up"  data-aos-delay="600"><a href="">Liga MX</a href=""></div>
        <div class="menu-category__item" data-aos="fade-up"  data-aos-delay="800"><a href="">La Liga</a href=""></div>
        <div class="menu-category__item" data-aos="fade-up"  data-aos-delay="1000"><a href="">Bundesliga</a href=""></div>
    </nav> -->

    <?php if( have_posts() ) : ?>
      <section class="grid-posts">
        <?php while (have_posts() ) : the_post(); ?>
          <article class="grid-posts__post">
             <?php the_post_thumbnail('small-thumbnail-1') ?>
              <!-- <img class="grid-posts__post__img" src="https://mt.brightspotcdn.com/dims4/default/da2fdcd/2147483647/resize/390x%3E/quality/90/?url=https%3A%2F%2Fmt.brightspotcdn.com%2F21%2F63%2F7741209c41a8a01c557ec3a3b65d%2F8.jpg" alt="imagen de post"> -->
            <h3 class="grid-posts__post__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p class="grid-posts__post__extract"><?php echo(get_the_excerpt()); ?></p>
            <div class="grid-posts__post__tags">
              <span><?php edit_post_link( 'Edit', '<p class="edit-button">', '</p>' ); ?></span>
              <span>Social</span>
            </div>  
          </article>
        <?php endwhile ?>
      </section>
    <?php else : ?>
      <section>
        <article>
        <h3 class="grid-posts__post__title">HEY!</h3>
            <p class="grid-posts__post__extract">Sin informacion que mostrar</p>
        </article>
      </section>
    <?php endif; ?>
    <?php get_sidebar(); ?>
    <div class="sponsor-lb">
      <img src="https://download-twitter-videos.com/es/img/728.jpg" alt="">
    </div>
  </main>
    <?php get_footer(); ?>
</body>
</html> 