<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
	
   
	<footer id="colophon" class="container container-no-padding site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
    <div class="row">
        <!-- <div class="footer-menu col-md-12 col-lg-9 col-xl-9">
        <?php get_template_part( 'footer-widget' ); ?>
        </div> -->
            <div class="copyright col-md-12 col-lg-3 col-xl-3">
                <div class="site-info">
                    Copyright  <?php echo get_bloginfo('name'); ?> <?php echo date('Y'); ?>
                </div><!-- close .site-info -->
            </div>
        </div><!--row-->
	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>

<script>           
    jQuery("#tab-2-special-button").click(function(){
        jQuery("#contact-tab").addClass("active");
        jQuery("#contact").addClass("active show");
        jQuery(".nav-link").removeClass("active");
        jQuery(".tab-pane").removeClass("active show");
    })
</script>

</body>
</html>