      <?php if (substr(show_template(), strrpos(show_template(), '/') + 1) != 'template-landing-page.php') : ?> 
      <?php endif;?>
      <?php 
        $footer_html = get_theme_mod('footer_html', '<p class="mb-0">© <strong>Xniz Theme</strong>. All rights reserved.</p>');
      ?>

      <div id="footer" class="container-fluid" class="border-top">
        <?php echo $footer_html; ?>
      </div>

      <?php wp_footer(); ?> 
    </div>
  </body>
</html>