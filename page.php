<?php get_header(); ?>

<main class="flex-fill">
  
  <?php if (is_front_page()) : ?>
  <?php get_template_part( 'template-parts/content/homepage-banner', '' ); ?>
  <?php get_template_part( 'template-parts/content/homepage', '' ); ?>
  <?php endif;?>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <?php while(have_posts()) : the_post(); ?>
        <?php the_content();?>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
  
</main>

<?php get_footer(); ?>