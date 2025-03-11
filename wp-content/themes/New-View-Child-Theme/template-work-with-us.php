<?php
/**
 * Template Name: Work With Us
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

                    <div class="page-work-content-container">
                        <h1><? the_field ('page_title') ?></h1>
                        <? the_field ('main_copy') ?>      
                        <button class="blue-button"><a href="/contact">Contact Us</a></button>                                               
                    </div><!--content-container-->

            </main><!-- #main -->
        </section><!-- #primary -->

        <div class="col-sm-12 col-lg-3 order-lg-1 page-sidebar mobile-sidebar-bottom">
            <div class="vertical-cogs">
                <div class="work-sidebar-img">
                    <img src="<? the_field('sidebar_img_1') ?>">
                </div>
                <div class="work-sidebar-img">
                    <img src="<? the_field('sidebar_img_2') ?>">
                </div>
                <div class="work-sidebar-img">
                    <img src="<? the_field('sidebar_img_3') ?>">
                </div>
                <div class="work-sidebar-img">
                    <img src="<? the_field('sidebar_img_4') ?>">
                </div>
                <div class="work-sidebar-img">
                    <img src="<? the_field('sidebar_img_5') ?>">
                </div>
            </div>
            <div class="horizontal-cogs">
                <img src="<? the_field('sidebar_img_medium') ?>">
            </div>
        </div>


    </div><!--row-->

</div><!--container-->

<?php
get_footer();
