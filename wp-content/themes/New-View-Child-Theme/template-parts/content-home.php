<?php
/**
 * Template part for displaying home page content
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */
 ?>


<section id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="container">
            <div class="row home-copy-block stripes">
                <div class="line-length-mod">
                    <? the_field('block_1_copy') ?>
                </div>
            </div><!--row-->
        </div><!--container-->

<div class="container container-no-padding">
        <div class="tabs-home">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item nav-item-1">
                <a class="nav-link nav-link-1 active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">EXPLORE OUR MINDSET</a>
            </li>
            <li class="nav-item nav-item-2">
                <a class="nav-link nav-link-2" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">HOW TO UNLEASH YOUR NEW VIEW</a>
            </li>
            <li class="nav-item nav-item-3">
                <a class="nav-link nav-link-3" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">VIEW REAL WORLD EXAMPLES</a>
            </li>
            </ul>

            <div class="tab-content" id="myTabContent" role="tablist">

                <!--tab-pane-1-->
                <div class="tab-pane tab-pane-1 fade show active" id="home" role="tabpanel" aria-labelledby="explore-our-mindset">
                    <div class="tab-1-copy col-8 col-sm-12">
                        <div class="line-length-mod">
                            <? the_field ('tab_1_copy') ?>
                        </div>
                        <!-- <button class="white-button-tab-1"> -->
                            <a class="white-button-tab-1" href="<? the_field ('tab_1_link') ?>">WORK WITH US to develop a cross-sector mindset</a>
                        <!-- </button> -->
                    </div> 
                   <div class="tab-1-img-1">
                        <img src="<? the_field ('tab_1_img_1') ?>">
                    </div> 
                    <div class="tab-1-img-2">
                        <img src="<? the_field ('tab_1_img_2') ?>">
                    </div>
                </div><!--tab-pane-1-->

                <!--tab-pane-2-->
                <div class="tab-pane tab-pane-2 fade" id="profile" role="tabpanel" aria-labelledby="profile">
                    <p><strong><? the_field ('tab_2_copy') ?></strong></p>
                        <div class="tab-2-img-1">
                            <img src="<? the_field ('tab_2_img_1') ?>">
                        </div>
                        <div class="tab-2-img-2">
                            <img src="<? the_field ('tab_2_img_2') ?>">
                        </div>
                    <div class="line-length-mod">
                        <? the_field ('tab_2_copy_2') ?>
                    </div>
                    <!-- <button class="white-button"> -->
                        <a id="tab-2-special-button" href="#contact"  data-toggle="tab" class="nav-link white-button-tab-2" aria-controls="contact" aria-selected="false" role="tab">See it in THE REAL WORLD</a>
                    <!-- </button> -->
                </div><!--tab-pane-2-->


                <!--tab-pane-3-->
                <div class="tab-pane tab-pane-3 fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="pane-3-boxes">
                      
                            <div class="pane-3-box">
                                <a href="<? the_field ('tab_3_box_1_link') ?>"> 
                                    <div class="pane-3-card-icon">
                                        <img src="https://takeanewvieworg.stage.site/wp-content/uploads/2020/06/pane-3-card-1.png">
                                    </div>
                                    <div class="pane-3-card stripes">
                                            <p><? the_field ('tab_3_box_1_copy') ?></p>
                                    </div>
                                </a>
                            </div>

                            <div class="pane-3-box">
                                <a href="<? the_field ('tab_3_box_2_link') ?>"> 
                                    <div class="pane-3-card-icon">
                                        <img src="https://takeanewvieworg.stage.site/wp-content/uploads/2020/06/pane-3-card-2.png">
                                    </div>
                                    <div class="pane-3-card stripes">
                                        <p><? the_field ('tab_3_box_2_copy') ?></p>
                                    </div>
                                </a>
                            </div>
                         
                            <div class="pane-3-box">
                                <a href="<? the_field ('tab_3_box_3_link') ?>"> 
                                    <div class="pane-3-card-icon">
                                        <img src="https://takeanewvieworg.stage.site/wp-content/uploads/2020/06/pane-3-card-3.png">
                                    </div>
                                    <div class="pane-3-card stripes">
                                        <p><? the_field ('tab_3_box_3_copy') ?></p>
                                    </div>
                                </a>
                            </div>    
                                              
                            <div class="pane-3-box">
                                <a href="<? the_field ('tab_3_box_4_link') ?>">
                                    <div class="pane-3-card-icon">
                                        <img src="https://takeanewvieworg.stage.site/wp-content/uploads/2020/06/pane-3-card-4.png">
                                    </div>
                                    <div class="pane-3-card stripes">
                                        <p><? the_field ('tab_3_box_4_copy') ?></p>
                                    </div>
                                </a>
                            </div>
                                              
                            <div class="pane-3-box">
                                <a href="<? the_field ('tab_3_box_5_link') ?>"> 
                                    <div class="pane-3-card-icon">
                                        <img src="https://takeanewvieworg.stage.site/wp-content/uploads/2020/06/pane-3-card-5.png">
                                    </div>
                                    <div class="pane-3-card stripes">
                                        <p><? the_field ('tab_3_box_5_copy') ?></p>
                                    </div>
                                </a>
                            </div>
                             
                            <div class="pane-3-box">
                                <a href="<? the_field ('tab_3_box_6_link') ?>"> 
                                    <div class="pane-3-card-icon">
                                        <img src="https://takeanewvieworg.stage.site/wp-content/uploads/2020/08/pane-3-card-6.png">
                                    </div>
                                    <div class="pane-3-card stripes">
                                    <p><? the_field ('tab_3_box_6_copy') ?></p>
                                    </div>
                                </a>
                            </div> 
                        

                    </div><!--row-->

                </div><!--tab-pane-3-->
            </div><!--tab-content-->       
        </div><!--tabs-home-->
        


        <div class="accordion-home">
                <div id="content" class="tab-content" role="tablist">

                <a class="collapsed" data-toggle="collapse" href="#collapse-A" aria-expanded="true"
                                    aria-controls="collapse-A">
                <div id="pane-A" class="card tab-pane" role="tabpanel" aria-labelledby="tab-A">
                    
                        <div class="card-header" role="tab" id="heading-A">
                        
                            <h5 class="mb-0">
                                    EXPLORE OUR MINDSET 
                            </h5>
                           
                        </div>
                        </a>
                    
                    <div id="collapse-A" class="collapse" role="tabpanel" aria-labelledby="heading-A" data-parent="#content">
                        <div class="card-body">
                        <? the_field ('tab_1_copy') ?>
                        <div class="tab-1-img-3 tab-img-margin-bottom">
                            <img src="<? the_field ('tab_1_img_3') ?>">
                        </div>
                        <div class="tab-1-img-4 tab-img-margin-bottom">
                            <img src="<? the_field ('tab_1_img_4') ?>">
                        </div>
                        <div class="accordion-cta-button">
                            <a class="white-button-tab-1" href="<? the_field ('tab_1_link') ?>">WORK WITH US to develop a cross-sector mindset</a>
                        </div>
                        </div>
                    </div>
                </div>

                <a class="collapsed" data-toggle="collapse" href="#collapse-B" aria-expanded="false"
                                    aria-controls="collapse-B" data-parent="#content">
                <div id="pane-B" class="card tab-pane" role="tabpanel" aria-labelledby="tab-B">
                    
                        <div class="card-header" role="tab" id="heading-B">
                            <h5 class="mb-0">                               
                                    HOW TO UNLEASH YOUR NEW VIEW                              
                            </h5>
                        </div>
                    </a>
                    <div id="collapse-B" class="collapse" role="tabpanel" aria-labelledby="heading-B" data-parent="#content">
                        <div class="card-body">
                            <p><strong><? the_field ('tab_2_copy') ?></strong></p>
                                <div class="tab-2-img-3">
                                    <img src="<? the_field ('tab_2_img_3') ?>">
                                </div>
                                <div class="tab-2-img-4">
                                    <img src="<? the_field ('tab_2_img_4') ?>">
                                </div>
                                <div class="pane-b-bottom-copy">
                                    <? the_field ('tab_2_copy_2') ?>
                                </div>
                            <div class="accordion-cta-button">
                                <a class="collapsed white-button-tab-2" data-toggle="collapse" href="#collapse-C" data-parent="#content" aria-expanded="false"
                                    aria-controls="collapse-C">See it in THE REAL WORLD</a>
                            </div>
                        </div>
                    </div>
                </div>


                <a class="collapsed" data-toggle="collapse" href="#collapse-C" aria-expanded="false"
                                    aria-controls="collapse-C">
                <div id="pane-C" class="card tab-pane" role="tabpanel" aria-labelledby="tab-C">
                
                        <div class="card-header" role="tab" id="heading-C">
                            <h5 class="mb-0">
                                    VIEW REAL WORLD EXAMPLES
                            </h5>
                        </div>
                    </a>
                    <div id="collapse-C" class="collapse" role="tabpanel" aria-labelledby="heading-C" data-parent="#content">
                        <div class="card-body">   

                            <div class="pane-3-boxes">
  
                                    <div class="pane-3-box">
                                        <a href="<? the_field ('tab_3_box_1_link') ?>"> 
                                            <div class="pane-3-card-icon">
                                                <img src="https://takeanewvieworg.stage.site/wp-content/uploads/2020/06/pane-3-card-1.png">
                                            </div>
                                            <div class="pane-3-card stripes">
                                                <p><? the_field ('tab_3_box_1_copy') ?></p>
                                            </div>
                                        </a>
                                    </div>                              
                                
                                    <div class="pane-3-box">
                                        <a href="<? the_field ('tab_3_box_2_link') ?>"> 
                                            <div class="pane-3-card-icon">
                                                <img src="https://takeanewvieworg.stage.site/wp-content/uploads/2020/06/pane-3-card-2.png">
                                            </div>
                                            <div class="pane-3-card stripes">
                                                <p><? the_field ('tab_3_box_2_copy') ?></p>
                                            </div>
                                        </a>
                                    </div>
                                                               
                                    <div class="pane-3-box">
                                        <a href="<? the_field ('tab_3_box_3_link') ?>"> 
                                            <div class="pane-3-card-icon">
                                                <img src="https://takeanewvieworg.stage.site/wp-content/uploads/2020/06/pane-3-card-3.png">
                                            </div>
                                            <div class="pane-3-card stripes">
                                                <p><? the_field ('tab_3_box_3_copy') ?></p>
                                            </div>
                                        </a>
                                    </div>   
                                                                                            
                                    <div class="pane-3-box">
                                        <a href="<? the_field ('tab_3_box_4_link') ?>"> 
                                            <div class="pane-3-card-icon">
                                                <img src="https://takeanewvieworg.stage.site/wp-content/uploads/2020/06/pane-3-card-4.png">
                                            </div>
                                            <div class="pane-3-card stripes">
                                                <p><? the_field ('tab_3_box_4_copy') ?></p>
                                            </div>
                                        </a>
                                    </div>                              
                                
                                    <div class="pane-3-box">
                                        <a href="<? the_field ('tab_3_box_5_link') ?>"> 
                                            <div class="pane-3-card-icon">
                                                <img src="https://takeanewvieworg.stage.site/wp-content/uploads/2020/06/pane-3-card-5.png">
                                            </div>
                                            <div class="pane-3-card stripes">
                                                <p><? the_field ('tab_3_box_5_copy') ?></p>
                                            </div>
                                        </a>    
                                    </div>                               
                               
                                   <div class="pane-3-box">
                                        <a href="<? the_field ('tab_3_box_6_link') ?>"> 
                                            <div class="pane-3-card-icon">
                                                <img src="https://takeanewvieworg.stage.site/wp-content/uploads/2020/08/pane-3-card-6.png">
                                            </div>
                                            <div class="pane-3-card stripes">
                                                <p><? the_field ('tab_3_box_6_copy') ?></p>
                                            </div>
                                        </a>
                                    </div>    
                                

                            </div><!--row-->

                        </div><!--card-body-->
                    </div>
                </div>
            </div>
        </div><!--accordion-home-->
</div><!--container-no-padding-->


        <div class="container">
            <div class="row home-copy-block-bottom stripes">
                <div class="line-length-mod">
                    <? the_field ('block_2_copy') ?>
                </div>
            </div><!--row-->
        </div><!--container-->

    </main><!-- #main -->
</section><!-- #primary -->	


<!--<div id="content" class="site-content">-->

</div><!--  #content -->

