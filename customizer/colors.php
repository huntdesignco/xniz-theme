  <?php
  function theme_customizer_colors( $wp_customize ) {

    // Main color
    $wp_customize->add_setting( 'main_color', array(
      'default'   => '#d82dc4',
      'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_color', array(
      'section' => 'colors',
      'label'   => esc_html__( 'Main color', 'xniz' ),
    ) ) );

    // Secondary color
    $wp_customize->add_setting( 'secondary_color', array(
      'default'   => '#1a1917',
      'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'secondary_color', array(
      'section' => 'colors',
      'label'   => esc_html__( 'Secondary color', 'xniz' ),
    ) ) );

    // Hamburger icon color
    $wp_customize->add_setting( 'hamburger_icon_color', array(
      'default'   => '#d82dc4',
      'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hamburger_icon_color', array(
      'section' => 'colors',
      'label'   => esc_html__( 'Hamburger icon color', 'xniz' ),
    ) ) );

        
    // Text color
    $wp_customize->add_setting( 'text_color', array(
      'default'   => '#1a1917',
      'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_color', array(
      'section' => 'colors',
      'label'   => esc_html__( 'Text color', 'xniz' ),
    ) ) );

    // Link color
    $wp_customize->add_setting( 'link_color', array(
      'default'   => '#d82dc4',
      'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
      'section' => 'colors',
      'label'   => esc_html__( 'Link color', 'xniz' ),
    ) ) );

    // Link hover color
    $wp_customize->add_setting( 'link_hover_color', array(
      'default'   => '#1a1917',
      'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_hover_color', array(
      'section' => 'colors',
      'label'   => esc_html__( 'Link hover color', 'xniz' ),
    ) ) );
    
    // Primary button
    $wp_customize->add_setting( 'primary_button_color', array(
      'default'   => '#d82dc4',
      'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_button_color', array(
      'section' => 'colors',
      'label'   => esc_html__( 'Primary button color', 'xniz' ),
    ) ) );

    // Primary button text
    $wp_customize->add_setting( 'primary_button_text_color', array(
      'default'   => '#ffffff',
      'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_button_text_color', array(
      'section' => 'colors',
      'label'   => esc_html__( 'Primary button text color', 'xniz' ),
    ) ) );

    // Primary button hover
    $wp_customize->add_setting( 'primary_button_hover_color', array(
      'default'   => '#1a1917',
      'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_button_hover_color', array(
      'section' => 'colors',
      'label'   => esc_html__( 'Primary button hover color', 'xniz' ),
    ) ) );

    // Primary button hover text
    $wp_customize->add_setting( 'primary_button_hover_text_color', array(
      'default'   => '#ffffff',
      'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_button_hover_text_color', array(
      'section' => 'colors',
      'label'   => esc_html__( 'Primary button hover text color', 'xniz' ),
    ) ) );

    // secondary button
    $wp_customize->add_setting( 'secondary_button_color', array(
      'default'   => '#1a1917',
      'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'secondary_button_color', array(
      'section' => 'colors',
      'label'   => esc_html__( 'Secondary button color', 'xniz' ),
    ) ) );

    // secondary button text
    $wp_customize->add_setting( 'secondary_button_text_color', array(
      'default'   => '#ffffff',
      'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'secondary_button_text_color', array(
      'section' => 'colors',
      'label'   => esc_html__( 'Secondary button text color', 'xniz' ),
    ) ) );

    // secondary button hover
    $wp_customize->add_setting( 'secondary_button_hover_color', array(
      'default'   => '#1a1917',
      'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'secondary_button_hover_color', array(
      'section' => 'colors',
      'label'   => esc_html__( 'Secondary button hover color', 'xniz' ),
    ) ) );

    // secondary button hover text
    $wp_customize->add_setting( 'secondary_button_hover_text_color', array(
      'default'   => '#ffffff',
      'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'secondary_button_hover_text_color', array(
      'section' => 'colors',
      'label'   => esc_html__( 'Secondary button hover text color', 'xniz' ),
    ) ) );

    // Navigation link background color
    $wp_customize->add_setting( 'nav_link_bg_color', array(
      'default'   => '#ffffff',
      'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nav_link_bg_color', array(
      'section' => 'colors',
      'label'   => esc_html__( 'Navigation link background color', 'xniz' ),
    ) ) );


    // Navigation link foreground color
    $wp_customize->add_setting( 'nav_link_fg_color', array(
      'default'   => '#1a1917',
      'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nav_link_fg_color', array(
      'section' => 'colors',
      'label'   => esc_html__( 'Navigation link foreground color', 'xniz' ),
    ) ) );

    // Navigation link hover background color
    $wp_customize->add_setting( 'nav_link_hover_bg_color', array(
      'default'   => '#1a1917',
      'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nav_link_hover_bg_color', array(
      'section' => 'colors',
      'label'   => esc_html__( 'Navigation link hover background color', 'xniz' ),
    ) ) );

    // Navigation link hover foreground color
    $wp_customize->add_setting( 'nav_link_hover_fg_color', array(
      'default'   => '#ffffff',
      'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nav_link_hover_fg_color', array(
      'section' => 'colors',
      'label'   => esc_html__( 'Navigation link hover foreground color', 'xniz' ),
    ) ) );

    // Navigation active link background color
    $wp_customize->add_setting( 'nav_active_bg_color', array(
      'default'   => '#d82dc4',
      'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nav_active_bg_color', array(
      'section' => 'colors',
      'label'   => esc_html__( 'Navigation active link background color', 'xniz' ),
    ) ) );

    // Navigation active link foreground color
    $wp_customize->add_setting( 'nav_active_fg_color', array(
      'default'   => '#ffffff',
      'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nav_active_fg_color', array(
      'section' => 'colors',
      'label'   => esc_html__( 'Navigation active link foreground color', 'xniz' ),
    ) ) );

    // Navigation active parent background
    $wp_customize->add_setting( 'nav_active_parent_bg_color', array(
      'default'   => '#1a1917',
      'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nav_active_parent_bg_color', array(
      'section' => 'colors',
      'label'   => esc_html__( 'Navigation active parent background color', 'xniz' ),
    ) ) );
    
    // Navigation active parent foreground
    $wp_customize->add_setting( 'nav_active_parent_fg_color', array(
      'default'   => '#ffffff',
      'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nav_active_parent_fg_color', array(
      'section' => 'colors',
      'label'   => esc_html__( 'Navigation active parent foreground color', 'xniz' ),
    ) ) );

  }

  function theme_get_customizer_colors() {
    ob_start();

    $text_color = get_theme_mod( 'text_color', '#1a1917' );
    if ( ! empty( $text_color ) ) :?> 
      body { color: <?php echo sanitize_hex_color( $text_color ); ?>; }
    <?php endif;?>
    
    <?php
    $main_color = get_theme_mod( 'main_color', '#d82dc4' );
    if ( ! empty( $main_color ) ) :?>
      .bg-dark { background-color: <?php echo $main_color; ?> !important; }  
    <?php endif;?>
    <?php

    $hamburger_icon_color = get_theme_mod( 'hamburger_icon_color', '#d82dc4' );
    if ( ! empty( $hamburger_icon_color ) ) :?> 
      #primary-nav .navbar-toggler i { color: <?php echo sanitize_hex_color( $hamburger_icon_color ); ?>; }
    <?php endif;?>
    <?php

    $link_color = get_theme_mod( 'link_color', '#d82dc4' );
    if ( ! empty( $link_color ) ) :?>
      a { color: <?php echo sanitize_hex_color( $link_color ); ?>; }
    <?php endif;?>
    <?php

    $link_hover_color = get_theme_mod( 'link_hover_color', '#1a1917' );
    if ( ! empty( $link_hover_color ) ) : ?>
      a:hover { color: <?php echo sanitize_hex_color( $link_hover_color ); ?>; }
    <?php endif;?>
    <?php

    $primary_button_color = get_theme_mod( 'primary_button_color', '#d82dc4' );
    if ( ! empty( $primary_button_color ) ) : ?>
      .btn-primary, .btn-primary:focus { background-color: <?php echo sanitize_hex_color( $primary_button_color ); ?>; border-color: <?php echo $primary_button_color; ?> !important; box-shadow: none; }
      .btn-outline-primary { border-color: <?php echo sanitize_hex_color( $primary_button_color ); ?> !important; color: <?php echo $primary_button_color; ?> !important; }
      .btn-outline-primary:focus, .btn-outline-primary:hover { background-color:  <?php echo sanitize_hex_color( $primary_button_color ); ?> !important; border-color: <?php echo sanitize_hex_color( $primary_button_color ); ?> !important; }  
    <?php endif;?>
    <?php

    $primary_button_text_color = get_theme_mod( 'primary_button_text_color', '#ffffff' );
    if ( ! empty( $primary_button_text_color ) ) : ?>
      .btn-primary, .btn-primary:focus { color: <?php echo sanitize_hex_color( $primary_button_text_color ); ?>; }
      .btn-outline-primary:focus, .btn-outline-primary:hover { color: <?php echo sanitize_hex_color( $primary_button_text_color ) ; ?> !important; }
    <?php endif;?>
    <?php

    $primary_button_hover_color = get_theme_mod( 'primary_button_hover_color', '#1a1917' );
    if ( ! empty( $primary_button_hover_color ) ) : ?>
      .btn-primary:hover, .btn-primary:focus { background-color: <?php echo sanitize_hex_color( $primary_button_hover_color ); ?> !important; border-color: <?php echo sanitize_hex_color( $primary_button_hover_color ); ?> !important; }
    <?php endif;?>
    <?php

    $primary_button_hover_text_color = get_theme_mod( 'primary_button_hover_text_color', '#ffffff' );
    if ( ! empty( $primary_button_hover_text_color ) ) : ?>
      .btn-primary:hover, .btn-primary:focus { color: <?php echo sanitize_hex_color( $primary_button_hover_text_color ); ?>; }
    <?php endif;?>
    <?php


    $secondary_button_color = get_theme_mod( 'secondary_button_color', '#1a1917' );
    if ( ! empty( $secondary_button_color ) ) : ?>
      .btn-secondary, .btn-secondary:focus { background-color: <?php echo sanitize_hex_color( $secondary_button_color ); ?>; border-color: <?php echo $secondary_button_color; ?> !important; box-shadow: none; }
      .btn-outline-secondary { border-color: <?php echo sanitize_hex_color( $secondary_button_color ); ?> !important; color: <?php echo $secondary_button_color; ?> !important; }
      .btn-outline-secondary:focus, .btn-outline-secondary:hover { background-color:  <?php echo sanitize_hex_color( $secondary_button_color ); ?> !important; border-color: <?php echo sanitize_hex_color( $secondary_button_color ); ?> !important; }  
    <?php endif;?>
    <?php

    $secondary_button_text_color = get_theme_mod( 'secondary_button_text_color', '#ffffff' );
    if ( ! empty( $secondary_button_text_color ) ) : ?>
      .btn-secondary, .btn-secondary:focus { color: <?php echo sanitize_hex_color( $secondary_button_text_color ); ?>; }
      .btn-outline-secondary:focus, .btn-outline-secondary:hover { color: <?php echo sanitize_hex_color( $secondary_button_text_color ) ; ?> !important; }
    <?php endif;?>
    <?php

    $secondary_button_hover_color = get_theme_mod( 'secondary_button_hover_color', '#1a1917' );
    if ( ! empty( $secondary_button_hover_color ) ) : ?>
      .btn-secondary:hover, .btn-secondary:focus { background-color: <?php echo sanitize_hex_color( $secondary_button_hover_color ); ?> !important; border-color: <?php echo sanitize_hex_color( $secondary_button_hover_color ); ?> !important; }
    <?php endif;?>
    <?php

    $secondary_button_hover_text_color = get_theme_mod( 'secondary_button_hover_text_color', '#ffffff' );
    if ( ! empty( $secondary_button_hover_text_color ) ) : ?>
      .btn-secondary:hover, .btn-secondary:focus { color: <?php echo sanitize_hex_color( $secondary_button_hover_text_color ); ?>; }
    <?php endif;?>
    <?php


    $nav_link_bg_color = get_theme_mod( 'nav_link_bg_color', '#ffffff' );
    if ( ! empty( $nav_link_bg_color ) ) : ?>
    #primary-nav .navbar-nav .nav-link { background-color: <?php echo sanitize_hex_color( $nav_link_bg_color ); ?>; }
    <?php endif;?>
    <?php

    $nav_link_fg_color = get_theme_mod( 'nav_link_fg_color', '#1a1917' );
    if ( ! empty( $nav_link_fg_color ) ) : ?>
    #primary-nav .navbar-nav .nav-link { color: <?php echo sanitize_hex_color( $nav_link_fg_color ); ?>; }
    <?php endif;?>
    <?php

    $nav_link_hover_bg_color = get_theme_mod( 'nav_link_hover_bg_color', '#1a1917' );
    if ( ! empty( $nav_link_hover_bg_color ) ) : ?>
    #primary-nav .navbar-nav .nav-link:hover, #primary-nav .navbar-nav .dropdown-menu a:hover, #primary-nav .dropdown-item:focus { background-color: <?php echo sanitize_hex_color( $nav_link_hover_bg_color ); ?>; }
    <?php endif;?>
    <?php

    $nav_link_hover_fg_color = get_theme_mod( 'nav_link_hover_fg_color', '#ffffff' );
    if ( ! empty( $nav_link_hover_fg_color ) ) : ?>
    #primary-nav .navbar-nav .nav-link:hover, #primary-nav .navbar-nav .dropdown-menu a:hover, #primary-nav .navbar-nav .dropdown-item:focus { color: <?php echo sanitize_hex_color( $nav_link_hover_fg_color ); ?>; }
    <?php endif;?>
    <?php

    $nav_active_bg_color = get_theme_mod( 'nav_active_bg_color', '#d82dc4' );
    if ( ! empty( $nav_active_bg_color ) ) : ?>
    #primary-nav .navbar-nav .current_page_item a, #primary-nav .navbar-nav .dropdown-menu .current_page_item a, #primary-nav .navbar-nav .dropdown-menu .current-menu-item a { background-color: <?php echo sanitize_hex_color( $nav_active_bg_color ); ?>; }
    #primary-nav .navbar-nav .current_page_item a:hover, #primary-nav .navbar-nav .dropdown-menu .current_page_item a:hover, #primary-nav .navbar-nav .dropdown-menu .current-menu-item a { background-color: <?php echo sanitize_hex_color( $nav_active_bg_color ); ?>; }

    <?php endif;?>
    <?php

    $nav_active_fg_color = get_theme_mod( 'nav_active_fg_color', '#ffffff' );
    if ( ! empty( $nav_active_fg_color ) ) : ?>
    #primary-nav .navbar-nav .current_page_item a, #primary-nav .navbar-nav .dropdown-menu .current_page_item a, #primary-nav .navbar-nav .dropdown-menu .current-menu-item a { color: <?php echo sanitize_hex_color( $nav_active_fg_color ); ?>; }
    #primary-nav .navbar-nav .current_page_item a:hover, #primary-nav .navbar-nav .dropdown-menu .current_page_item a:hover, #primary-nav .navbar-nav .dropdown-menu .current-menu-item a:hover { color: <?php echo sanitize_hex_color( $nav_active_fg_color ); ?>; }

    <?php endif;?>
    <?php

    $nav_active_parent_fg_color = get_theme_mod( 'nav_active_parent_fg_color', '#ffffff' );
    if ( ! empty( $nav_active_parent_fg_color ) ) : ?>
    #primary-nav .navbar-nav .current-menu-parent.dropdown>a, #primary-nav .navbar-nav .current-menu-parent.dropdown:focus>a { color: <?php echo $nav_active_parent_fg_color; ?>; }  
    <?php endif;?>
    <?php

    $nav_active_parent_bg_color = get_theme_mod( 'nav_active_parent_bg_color', '#1a1917' );
    if ( ! empty( $nav_active_parent_bg_color ) ) : ?>
    #primary-nav .navbar-nav .current-menu-parent.dropdown, #primary-nav .navbar-nav .current-menu-parent.dropdown:focus, #primary-nav .navbar-nav .current-menu-parent.dropdown > .nav-link , #primary-nav .navbar-nav .current-menu-parent.dropdown:focus > .nav-link { background-color: <?php echo $nav_active_parent_bg_color; ?>; }  
    <?php endif;?>
    <?php

    $css = ob_get_clean();
    return $css;
  }
  ?>