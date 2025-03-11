<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<div class="container container-no-padding">
    <div class="case-studies-banner">
                <div class="case-studies-icon">
                    <img src="<? the_field ('banner_image') ?>">
                </div>
          
            <div class="case-studies-banner-copy">
                <h1><? the_field ('banner_title') ?></h1>
                <? the_field ('banner_copy') ?>
            </div><!--col-->
    </div><!--banner-->
</div><!--container-->


<div class="container white-background body-padding">
    <div class="row">
        <div class="col-sm-12 col-lg-3 case-studies-sidebar">
            <div class="sidebar-title"><? the_field('sidebar_title') ?></div>
            <? the_field('sidebar_copy') ?>
        </div>

        <section id="primary" class="content-area main-content col-sm-12 col-lg-9">
            <main id="main" class="site-main" role="main">

                    <div class="page-content-container">
                        <div class="case-studies-boxes">
                            <div class="box-1 blue-stripes">
                                <div class="box-1-title"><? the_field ('box_1_title') ?></div>
                            </div>
                            <div class="box-2">
                                <div class="box-2-arrow"><div class="arrow-img"><img src="/wp-content/uploads/2020/06/box-2-arrow.png"></div></div>
                                <div class="box-content">
                                    <div class="box-title"><? the_field ('box_2_title') ?></div>
                                    <p><? the_field ('box_2_copy') ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="case-studies-boxes">
                            <div class="box-3">
                                <div class="box-content">
                                    <div class="box-title"><? the_field ('box_3_title') ?></div>
                                    <p><? the_field ('box_3_copy') ?></p>
                                </div>
                                <div class="box-3-arrow"><div class="arrow-img"><img src="/wp-content/uploads/2020/06/box-3-arrow.png"></div></div>
                            </div>
                            <div class="box-4">
                                <div class="box-4-arrow"><div class="arrow-img"><img src="/wp-content/uploads/2020/06/box-4-arrow.png"></div></div>
                                <div class="box-content">
                                    <div class="box-title"><? the_field ('box_4_title') ?></div>
                                    <p><? the_field ('box_4_copy') ?></p>
                                </div>
                            </div>
                        </div>


                        <div class="case-studies-copy">
                                <?php
                                while ( have_posts() ) : the_post();

                                    get_template_part( 'template-parts/content-case-studies', get_post_format() );

                                        the_post_navigation();

                                endwhile; // End of the loop.
                                ?>
                        </div><!--copy-->
                    </div><!--content-container-->

            </main><!-- #main -->
        </section><!-- #primary -->
    </div><!--row-->
    
            <div class="case-studies-horizontal-cogs">
                <img src="<? the_field('footer_image') ?>">
            </div>

            <div class="case-studies-vertical-cogs">
                <div class="work-sidebar-img">
                    <img src="<? the_field('footer_img_vertical_1') ?>">
                </div>
                <div class="work-sidebar-img">
                    <img src="<? the_field('footer_img_vertical_2') ?>">
                </div>
                <div class="work-sidebar-img">
                    <img src="<? the_field('footer_img_vertical_3') ?>">
                </div>
                <div class="work-sidebar-img">
                    <img src="<? the_field('footer_img_vertical_4') ?>">
                </div>
                <div class="work-sidebar-img">
                    <img src="<? the_field('footer_img_vertical_5') ?>">
                </div>
            </div>

</div><!--container-->
<?php
get_footer();
