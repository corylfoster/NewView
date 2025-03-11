<div class="container white-background body-padding">
    <div class="row">
        <div class="col-sm-12 col-lg-3 page-sidebar">
            <div class="sidebar-title"><? the_field('sidebar_title') ?></div>
            <? the_field('sidebar_copy') ?>
        </div>

        <section id="primary" class="content-area main-content col-sm-12 col-lg-9">
            <main id="main" class="site-main" role="main">

                    <div class="about-content-container">
                        <h1><? the_field ('page-title') ?></h1>
                        <? the_field ('main-copy') ?> 
                        <button class="blue-button"><a href="/contact">Contact Us</a></button>                                                   
                    </div><!--content-container-->

            </main><!-- #main -->
        </section><!-- #primary -->
    </div><!--row-->

</div><!--container-->