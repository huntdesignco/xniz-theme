<div id="home">
  <div id="search-inventory">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="mb-0">Check Inventory</h2>
          <form role="search" method="post" action="<?php echo home_url( '/parts-search' ); ?>">
            <hr>
            <div class="form-row mb-3">
              
              <div class="col-sm-12 col-md-4">
                <label for="car-make">Year</label>
                <select class="form-control" id="car-year" name="auto-year">
                  <option selected disabled>Choose a year...</option>
                  <?php
                    $terms = get_terms("pa_auto-year");
                    foreach ( $terms as $term ) {
                      echo '<option value="' . $term->slug . '">' . $term->name . '</option>';
                    }
                  ?>
                </select>              
              </div>

              <div class="col-sm-12 col-md-4">
                <label for="car-make">Make</label>
                <select class="form-control" id="car-make" name="auto-make">
                  <option selected disabled>Choose a make...</option>
                  <?php
                    $terms = get_terms("pa_auto-make");
                    foreach ( $terms as $term ) {
                      echo '<option value="' . $term->slug . '">' . $term->name . '</option>';
                    }
                  ?>
                </select> 
              </div>
              <div class="col-sm-12 col-md-4">
                <label for="car-make">Model</label>
                <select class="form-control" id="car-model" name="auto-model">
                  <option selected disabled>Choose a model...</option>
                  <?php
                    $terms = get_terms("pa_auto-model");
                    foreach ( $terms as $term ) {
                      echo '<option value="' . $term->slug . '">' . $term->name . '</option>';
                    }
                  ?>
                </select> 
              </div> 

            </div>
            <button type="submit" class="btn btn-block btn-secondary">Search</button>
          </form>

        </div>
      </div>
    </div>
  </div>
  <div id="section-1" class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-6 text-center">
          <img src="/wp-content/uploads/2020/12/stock-photo-1.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-md-12 col-lg-6">
          <h2>We have a wide variety of inventory...</h2>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
          <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
          <p>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</p>
          <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
          <button class="btn btn-primary read-more">Read more</button>
        </div>
      </div>
    </div>
  </div>

  <div id="section-2" class="section-small">
    <div class="container">

      <div class="row mb-4">
        <div class="col-12 text-center">
          <h2>What can we do for you?</h2>
          <p class="mb-3">We have an excellent variety of auto parts for your auto needs.</p>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-lg-4">
          <div class="block">
            <i class="fas fa-car-crash mb-2"></i>
            <h6>Body Parts</h6>
            <small>Got into a recent accident? Need some body parts? Give us a call or check our inventory for more details.</small>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="block">
            <i class="fas fa-oil-can"></i>
            <h6>Engines / Components</h6>
            <small>Blew your engine? Need an alternator? Need a new oil pump? We can help find what you need.</small>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="block">
            <i class="fab fa-cc-paypal"></i>
            <h6>Enterprise Payments</h6>
            <small>We use fast and secure payment processing from one of the most popular payment processing companies in the world.</small>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
