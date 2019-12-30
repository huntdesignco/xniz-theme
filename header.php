<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head();?>
</head>

<body <?php body_class( 'class-name' ); ?>>
  <?php if (substr(show_template(), strrpos(show_template(), '/') + 1) != 'template-landing-page.php') : ?>
  
  <div id="wrapper" class="d-flex flex-column">
    <?php if (is_admin_bar_showing()) : ?>
    <div id="admin-bar-filler"></div>
    <?php endif;?>

    <?php $navbar_bg_color = get_theme_mod( 'navbar_bg_color' , 'bg-light' ); ?>
    <nav id="primary-nav" class="navbar navbar-expand-lg <?php echo $navbar_bg_color;?>">
      <?php $logo_type = get_theme_mod( 'logo_type' , 'text' ); ?>

      <?php if ($logo_type == 'text') :?>
      <?php $logo_text = get_theme_mod('logo_text', 'Xniz Theme'); ?>
      <a class="navbar-brand" href="<?php echo get_site_url(); ?>"><?php echo $logo_text;?></a>
      <?php else: ?>
      <?php $logo_image = get_theme_mod('logo_image', get_template_directory_uri() . '/images/logo.png'); ?>
      <?php $logo_width = get_theme_mod('logo_width', '25'); ?>
      <?php $logo_height = get_theme_mod('logo_height', '25'); ?>

      <a class="navbar-brand" href="<?php echo get_site_url(); ?>"><img src="<?php echo $logo_image;?>" alt="logo" style="width: <?php echo $logo_width;?>px; height: <?php echo $logo_height;?>px"></a>
      <?php endif;?>

      <?php if (check_for_woocommerce()) : ?>
      <div class="mobile-search-form">
        <form class="form-inline" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
          <div class="input-group">
            <input class="form-control" type="search" placeholder="Begin your search..." aria-label="Search" value="<?php echo get_search_query() ?>" name="s">
            <div class="input-group-append">
              <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            </div>
          </div>
        </form>
      </div>
      <?php endif;?>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#primary-nav-links" aria-controls="primary-nav-links" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>

      <?php $navbar_button_align = get_theme_mod('navbar_button_align', 'justify-content-center'); ?>
      <div class="<?php echo $navbar_bg_color;?> collapse navbar-collapse <?php echo (!check_for_woocommerce() ? $navbar_button_align : '');?>" id="primary-nav-links">
        <?php bootstrap_nav(); ?>
        
        <?php if (get_option('users_can_register')) : ?>
        <ul class="nav navbar-nav user-controls">
          <?php if (is_user_logged_in()) : ?>
          <li><a class="nav-link" href="/wp-login.php?action=logout">Logout</a></li>
          <?php else :?>
          <li class="<?php echo (basename(show_template()) == 'template-register.php' ? 'menu-item current_page_item active' : 'menu-item'); ?>"><a class="nav-link" href="/register">Register</a></li>
          <?php if (!check_for_woocommerce()) :?>
          <li class="<?php echo (basename(show_template()) == 'template-login.php' ? 'menu-item current_page_item active' : 'menu-item'); ?>"><a class="nav-link" href="/login">Login</a></li>
          <?php endif;?>
          <?php endif;?>
        </ul>
        <?php endif;?>
        
        <?php if (check_for_woocommerce()) : ?>
        <div class="desktop-search-form ml-auto">
          <form class="form-inline" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
            <div class="input-group">
              <input class="form-control" type="search" placeholder="Begin your search..." aria-label="Search" value="<?php echo get_search_query() ?>" name="s">
              <div class="input-group-append">
                <button class="btn" type="submit"><i class="fas fa-search"></i></button>
              </div>
              <div class="input-group-append">
                <a href="<?php echo wc_get_cart_url();?>" class="cart"><i class="fas fa-shopping-cart"></i><sup> <?php echo WC()->cart->get_cart_contents_count(); ?></sup></a>
              </div>
            </div>
          </form>
        </div>
        <?php endif;?>

      </div>
    </nav>
    <?php endif;?>