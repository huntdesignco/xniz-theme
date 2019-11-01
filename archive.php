<?php get_header(); ?>

  <main id="blog-archive" class="small-width-page flex-fill">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <?php while(have_posts()) : the_post(); ?>
          <div class="row">
            <div class="col-md-12">
              <h2><a class="post-title" href="<?php the_permalink();?>"><?php the_title();?></a></h2>
              <p class="post-excerpt"><?php echo get_the_excerpt();?>
            </div>
          </div>
          <?php endwhile; ?>

        </div>
      </div>
    </div>
  </main>

<?php get_footer(); ?>