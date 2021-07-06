<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
<html <?php bloginfo('charset');?>>
    <title>Portfolio-site</title>
    <meta name="description" content="Rika OishiのPortfolioサイトです。2020年に制作してから約1年が立ちました。夢を叶えるために、就職活動に向けて新たなポートフォリオサイトを制作しました。">
    <meta name="author" content="Rika Oishi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <!-- <link href="style.css" rel="stylesheet"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Salsa&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class();?>>

    <header class="header">
        <div class="pc-inner">
            <div class="inner">
                <h1 class="header-logo"><a href="index.html">Portfolio</a></h1>
                <i class="fas fa-bars"></i>
            </div><!-- inner -->

            <nav class="header-nav-sp">
                <i class="fas fa-times"></i>
                <!-- <ul class="nev-list">
                    <li><a href="index.html#about">About</a></li>
                    <li><a href="index.html#skills">Skills</a></li>
                    <li><a href="index.html#works">Works</a></li>
                    <li><a href="https://www.instagram.com/rika.ri/?hl=ja" target="_blank"><i
                                class="fab fa-instagram"></i></a></li>
                    <li><a href="https://twitter.com/ri_ri0315" target="_blank"><i class="fab fa-twitter"></i></a></li>
                </ul> -->

                <?php wp_nav_menu( array(
                'theme_location' => 'sp-menu',
                'items_wrap'     => '<ul class="nev-list">%3$s</ul>'
                ) );  ?>

            </nav><!-- header-nav-sp -->

            <nav class="header-nav-pc">
                <!-- <ul class="nev-list">
                    <li><a href="index.html#about">About</a></li>
                    <li><a href="index.html#skills">Skills</a></li>
                    <li><a href="index.html#works">Works</a></li>
                    <li><a href="https://www.instagram.com/rika.ri/?hl=ja" target="_blank"><i
                                class="fab fa-instagram"></i></a></li>
                    <li><a href="https://twitter.com/ri_ri0315" target="_blank"><i class="fab fa-twitter"></i></a></li>
                </ul> -->

                <?php wp_nav_menu( array(
                'theme_location' => 'header-menu',
                'items_wrap'     => '<ul class="nev-list">%3$s</ul>'
                 ) );  ?>

            </nav><!-- header-nav-pc -->
        </div><!-- "pc-inner -->
    </header>
