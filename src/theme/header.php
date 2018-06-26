<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110577987-1"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-110577987-1');
	</script> -->
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="wrapper">
    <header class="header">
    <?php if (has_custom_logo()) {?>
      <div class="header__logo"><?php the_custom_logo(); ?></div>
    <?php }else{ ?>
        <div class="header__logo"><img src=" <?php echo esc_url( 'https://www.uplabs.com/logos/uplabs/default--color.svg' ); ?> " alt="Logo"></div>
    <?php } ?>
    <!-- Social Menu -->
        <?php 
          $args = array(
            'theme_location' => 'social-menu',
            'container' => 'nav',
            'container_class' => 'header__menu-social',
            'before' => '<i class="fab"></i> '
          );
          wp_nav_menu($args);
        ?>
    <!-- END SOcial Menu -->
      <div class="header__search">
        <div><?php get_search_form();?></div>
      </div>
    </header>