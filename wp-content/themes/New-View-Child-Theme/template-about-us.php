<?php
/**
 * Template Name: About Us
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
                        <h1><? the_field ('page_title') ?></h1>
                        <? the_field ('main_copy') ?>    
                        <button class="blue-button"><a href="/contact">Contact Us</a></button>                                                 
                    </div><!--content-container-->

            </main><!-- #main -->
        </section><!-- #primary -->

        <div class="col-sm-12 col-lg-3 order-lg-1 page-sidebar mobile-sidebar-bottom sidebar-about">
            <? the_field('sidebar_copy') ?>
        </div>
    </div><!--row-->

</div><!--container-->

<?php
get_footer();
