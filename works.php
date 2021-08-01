<?php
/*
Template Name: works
*/
?>


<?php get_header(); ?>

    <div class="single-key-visual">
        <div class="inner">
            <h2 class="main-ttl">Works</h2>
        </div>
    </div><!-- single-key-visual -->

    <main>
        <div class="bk">
            <div class="inner">
            <ul class="nav-list">

            <?php echo do_shortcode( '[flexy_breadcrumb]'); ?>

            </ul><!-- nav-list -->

                <section class="archive-wrapper">
                    <h3 class="main-ttl">my work</h3>
                    <h4 class="list-ttl">制作実績を紹介します。</h4>

                    <div class="works-img">

                        <a class="img-filter" href="<?php echo get_permalink(9); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/imge/portoforio01-img.png">
                            <div class="img-mask">
                                <div class="img-cap">portoforio-2020</div>
                            </div>
                        </a><!-- img-filter -->

                        <a class="img-filter" href="<?php echo get_permalink(11); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/imge/portoforio2021-img.png">
                            <div class="img-mask">
                                <div class="img-cap">portoforio-2021</div>
                            </div>
                        </a><!-- img-filter -->

                        <a class="img-filter" href="<?php echo get_permalink(14); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/imge/kurisuta-img.png">
                            <div class="img-mask">
                                <div class="img-cap">kurisuta</div>
                            </div>
                        </a><!-- img-filter -->
                    </div><!-- works-img -->
                </section><!-- archive-wrapper -->
            </div><!-- inner -->
        </div><!-- bk -->
    </main>

    <?php get_footer(); ?>