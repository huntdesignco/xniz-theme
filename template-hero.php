<?php
/* Template Name: Hero Template */
?>

<?php get_template_part( 'template-parts/content/hero', '' ); ?>

<?php get_header(); ?>
<main class="full-width-page flex-fill">
  <div class="container-fluid">

    <div class="row">
      <div class="col-sm-12">
        
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
        <?php the_content();?>
        <?php endwhile; ?>
        <?php endif; ?>

      </div>
    </div>

  </div>
</main>
<?php get_footer(); ?>