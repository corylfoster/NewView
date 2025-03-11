<?php
/**
 * Template Name: Home
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<div class="container container-no-padding">
<div class="carousel-home">
    <div class="carousel-header">SEE WHAT HAPPENS...</div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="4500" data-pause="false">
			<ol class="carousel-indicators">
    			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  			</ol>	
		
			<div class="carousel-inner">
                <div class="carousel-item active">
                	<p><? the_field ('carousel_1_copy') ?></p>
					<a class="white-button" href="<? the_field ('carousel_1_link') ?>">LEARN MORE about this real world example</a>
                </div>
                <div class="carousel-item">
					<p><? the_field ('carousel_2_copy') ?></p>
					<a class="white-button" href="<? the_field ('carousel_2_link') ?>">LEARN MORE about this real world example</a>
                </div>
                <div class="carousel-item">
					<p><? the_field ('carousel_3_copy') ?></p>
					<a class="white-button" href="<? the_field ('carousel_3_link') ?>">LEARN MORE about this real world example</a>
                </div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    			<span class="sr-only">Previous</span>
  			</a>
  			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    			<span class="carousel-control-next-icon" aria-hidden="true"></span>
    			<span class="sr-only">Next</span>
  			</a>
        </div>
</div><!--home-carousel-->
</div>


		

			

					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'home' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>

	

<?php
get_footer();
