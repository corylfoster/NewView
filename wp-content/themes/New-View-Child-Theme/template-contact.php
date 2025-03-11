<?php
/**
 * Template Name: Contact
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */


get_header(); ?>

<div class="container container-no-padding">
    <div class="blue-banner">
    </div><!--banner-->
</div><!--container-->


<div class="container white-background body-padding">
    <div class="row">

    <section id="primary" class="content-area main-content col-sm-12 col-lg-9 order-lg-2">
            <main id="main" class="site-main" role="main">

                    <div class="page-content-container">
                        <?php the_title( '<h1>', '</h1>' ); ?>
                        <? the_field ('page_content') ?>                                               
                    </div><!--content-container-->

            </main><!-- #main -->
        </section><!-- #primary -->

        <div class="col-sm-12 col-lg-3 order-lg-1 page-sidebar"></div>


    </div><!--row-->

</div><!--container-->

<?php
get_footer();
