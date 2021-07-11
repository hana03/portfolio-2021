<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
<html <?php bloginfo('charset');?>>
    <!-- <title>Portfolio-site</title> -->
    <meta name="description" content="<?php bloginfo('descriptiont');?>">
    <meta name="author" content="Rika Oishi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Salsa&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class();?>>

    <header class="header">
        <div class="pc-inner">
            <div class="inner">
                <h1 class="header-logo"><a href="<?php echo esc_url( home_url() ); ?>">Portfolio</a></h1>
                <i class="fas fa-bars"></i>
            </div><!-- inner -->

            <nav class="header-nav-sp">
                <i class="fas fa-times"></i>

                <?php wp_nav_menu( array(
                'theme_location' => 'sp-menu',
                'items_wrap'     => '<ul class="nev-list">%3$s</ul>'
                ) );  ?>

            </nav><!-- header-nav-sp -->

            <nav class="header-nav-pc">

                <?php wp_nav_menu( array(
                'theme_location' => 'header-menu',
                'items_wrap'     => '<ul class="nev-list">%3$s</ul>'
                 ) );  ?>

            </nav><!-- header-nav-pc -->
        </div><!-- "pc-inner -->
    </header>
