<?php
function theme_customizer_navigation( $wp_customize ) {


  $wp_customize->add_section( 'navbar_configuration' , array(
    'title'      => __( 'Primary Navbar Configuration', 'xniz' ),
  ));

  // Logo size
  $wp_customize->add_setting('navbar_padding', array(
    'capability' => 'edit_theme_options',
    'default' => '0',
  ));

  $wp_customize->add_control( 'navbar_padding', array(
    'type' => 'number',
    'section' => 'navbar_configuration', // Add a default or your own section
    'label' => esc_html__( 'Padding' )
  ));

}

function theme_get_customizer_navigation() {
  ob_start();

  $navbar_padding = get_theme_mod( 'navbar_padding', '0' );
  if ( ! empty( $navbar_padding ) ) :?> 
    #primary-nav { padding: <?php echo $navbar_padding; ?>px; }
  <?php endif;?>
  <?php

  $css = ob_get_clean();
  return $css;
}


?>