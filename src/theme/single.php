<?php get_header(); ?>
  <?php while(have_posts()): the_post(); ?>
    <main class="main-single-post">
      <div class="single-post__hero">
        <?php the_title('<h1 class="single-post__hero__title">','</h1>'); ?>
        <p class="single-post__hero__copy">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
        <div class="author">
          <div class="author__info">
            <figure class="author__info__avatar"><img src="https://cdn.pixabay.com/photo/2016/08/20/05/38/avatar-1606916_1280.png" alt=""></figure>
            <div class="author__info__name-container">
              <p class="author__info__name-container__name">Juanito Sanchez</p>
              <p class="author__info__name-container__description">Author, Progradamor, seguidor " i cna i cna just do it "</p>
            </div>
          </div>
          <div class="author__share-post">
            <a href="">Share</a>
          </div>
        </div>
      </div>
      <div class="single-post__thumbnail">
        <?php the_post_thumbnail('large') ?>
      </div>
      <div class="single-post__content"><?php the_content();?></div>
  <?php endwhile ?>
      <div class="single-post-footer">
        <div class="sponsor-lb">
          <img src="https://download-twitter-videos.com/es/img/728.jpg" alt="">
        </div>
        <div class="author">
          <div class="author__info">
            <figure class="author__info__avatar"><img src="https://cdn.pixabay.com/photo/2016/08/20/05/38/avatar-1606916_1280.png" alt=""></figure>
            <div class="author__info__name-container">
              <p class="author__info__name-container__name">Juanito Sanchez</p>
              <p class="author__info__name-container__description">Author, Progradamor, seguidor " i cna i cna just do it "</p>
            </div>
          </div>
          <div class="author__share-post">
            <a href="">Share</a>
          </div>
        </div>
        <div class="tags">
          <ul>
            <li class="btn-raw"><i class="fas fa-tag"></i><a href="">Liga MX</a></li>
            <li class="btn-raw"><i class="fas fa-tag"></i><a href="">Futbol</a></li>
            <li class="btn-raw"><i class="fas fa-tag"></i><a href="">Entrenadores</a></li>
            <li class="btn-raw"><i class="fas fa-tag"></i><a href="">Entrenadores</a></li>
            <li class="btn-raw"><i class="fas fa-tag"></i><a href="">Entrenadores</a></li>
          </ul>
        </div>
      </div>
      <section class="grid-post-ads">
        <article class="grid-post-ads__add">
          <img src="https://placehold.it/300x250/56aace/fff" alt="">
        </article>
        
        <?php if( have_posts() ) : ?>
          <?php while (have_posts() ) : the_post(); ?>
            <article class="grid-post-ads__post">
              <?php the_post_thumbnail('small-thumbnail-1') ?>
              <h3 class="grid-posts__post__title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h3>
            </article>
          <?php endwhile?>
        <?php else : ?>
          <article class="grid-post-ads__post">
        <h3 class="grid-posts__post__title">HEY!</h3>
            <p class="grid-posts__post__extract">Sin informacion que mostrar</p>
        </article>
        <?php endif; ?>

        <?php if( have_posts() ) : ?>
          <?php while (have_posts() ) : the_post(); ?>
            <article class="grid-post-ads__post">
              <?php the_post_thumbnail('small-thumbnail-1') ?>
              <h3 class="grid-posts__post__title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h3>
            </article>
          <?php endwhile?>
        <?php else : ?>
          <article class="grid-post-ads__post">
        <h3 class="grid-posts__post__title">HEY!</h3>
            <p class="grid-posts__post__extract">Sin informacion que mostrar</p>
        </article>
        <?php endif; ?>

        <?php if( have_posts() ) : ?>
          <?php while (have_posts() ) : the_post(); ?>
            <article class="grid-post-ads__post">
              <?php the_post_thumbnail('small-thumbnail-1') ?>
              <h3 class="grid-posts__post__title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h3>
            </article>
          <?php endwhile?>
        <?php else : ?>
          <article class="grid-post-ads__post">
        <h3 class="grid-posts__post__title">HEY!</h3>
            <p class="grid-posts__post__extract">Sin informacion que mostrar</p>
        </article>
        <?php endif; ?>

        <?php if( have_posts() ) : ?>
          <?php while (have_posts() ) : the_post(); ?>
            <article class="grid-post-ads__post">
              <?php the_post_thumbnail('small-thumbnail-1') ?>
              <h3 class="grid-posts__post__title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h3>
            </article>
          <?php endwhile?>
        <?php else : ?>
          <article class="grid-post-ads__post">
        <h3 class="grid-posts__post__title">HEY!</h3>
            <p class="grid-posts__post__extract">Sin informacion que mostrar</p>
        </article>
        <?php endif; ?>

        <article class="grid-post-ads__add">
          <img src="https://placehold.it/300x250/56aace/fff" alt="">
        </article>
      </section>
    </main>
<?php get_footer(); ?>




      