<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php bloginfo('name'); ?> | <?php if( is_home() ) : echo bloginfo( 'description' ); endif; ?><?php wp_title( '', true ); ?></title>
        <meta name="author" content=<?php echo bloginfo('name'); ?>>
        <meta name="description" content=<?php echo bloginfo('description'); ?>>
        <meta name="viewport" content="width=device-width">

        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

        <?php wp_head(); ?>

    </head>

<body <?php body_class(); ?>>

    <header >
        <div class="header-container clearfix">
            
            <div class="admin-avatar">
                <?php 
                    // grab admin email and their photo
                    $admin_email = get_option('admin_email');
                    echo get_avatar( $admin_email, 100 ); 
                ?>
            </div>

            <div id="site-title">
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> </h1>
            </div>

            <div id="site-desc">
                <h2 class="site-desc"><?php echo get_bloginfo( 'description' ); ?> </h2>
            </div>            
            
            <nav role="navigation" class="site-navigation main-navigation ">
                <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
            </nav>
            
        </div>   
    </header>

<div class="container">

    <div id="primary">
        <div id="content" role="main">

