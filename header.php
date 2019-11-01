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

    <nav id="primary-nav" class="navbar navbar-expand-lg">
      <?php $logo_type = get_theme_mod( 'logo_type' , 'text' ); ?>

      <?php if ($logo_type == 'text') :?>
      <?php $logo_text = get_theme_mod('logo_text', 'Xniz Theme'); ?>
      <a class="navbar-brand" href="<?php echo get_site_url(); ?>"><?php echo $logo_text;?></a>
      <?php else: ?>
      <?php $logo_image = get_theme_mod('logo_image', get_template_directory_uri() . '/images/logo.png'); ?>
      <?php $logo_size = get_theme_mod('logo_size', '150'); ?>

      <a class="navbar-brand" href="<?php echo get_site_url(); ?>"><img src="<?php echo $logo_image;?>" alt="logo" style="width: <?php echo $logo_size;?>px"></a>

      <?php endif; ?>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#primary-nav-links" aria-controls="primary-nav-links" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="primary-nav-links">
        <?php bootstrap_nav(); ?>

        <?php if (get_option('users_can_register')) : ?>
        <ul class="nav navbar-nav user-controls">
          <?php if (is_user_logged_in()) : ?>
          <li><a class="nav-link" href="/wp-login.php?action=logout">Logout</a></li>
          <?php else :?>
          <li class="<?php echo (basename(show_template()) == 'template-register.php' ? 'menu-item current_page_item active' : 'menu-item'); ?>"><a class="nav-link" href="/register">Register</a></li>
          <li class="<?php echo (basename(show_template()) == 'template-login.php' ? 'menu-item current_page_item active' : 'menu-item'); ?>"><a class="nav-link" href="/login">Login</a></li>
          <?php endif;?>
        </ul>
        <?php endif;?>

      </div>
    </nav>
    <?php endif;?>