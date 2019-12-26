<?php get_header(); ?>
<main class="flex-fill" id="search-results">

  <div class="container mt-4">
    <div class="row">
      <div class="col-md-12">

        <header class="page-header">
          <h1 class="page-title">
            <?php printf( __( 'Search Results for: %s', 'xniz' ), get_search_query() ); ?>
          </h1>
        </header>
        <hr>
      </div>
    </div>
    
    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
    <div class="row mb-4">
      <div class="col-sm-12 col-md-4 col-lg-4">
        <img src="<?php echo get_the_post_thumbnail_url();?>" alt="" class="img-fluid mb-3">
      </div>
      <div class="col-sm-12 col-md-8 col-lg-8">
        <h3><a href="<?php echo get_permalink(); ?>">
          <?php the_title();  ?>
        </a></h3>
        <?php echo get_the_excerpt(); ?>
        <br>
        <a class="btn btn-sm btn-secondary mt-2" href="<?php the_permalink(); ?>">Read More</a>
      </div>
    </div>

    <?php endwhile; ?>
    <div class="row pb-4">
      <div class="col-12">
        <?php echo paginate_links(); ?>
      </div>
    </div>

    <?php endif; ?>

    </div>
  </div>
</main>

<?php get_footer(); ?>