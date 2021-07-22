<?php 
/**
 * Template Name: Homepage Template
 * @package ThemeHunk
 * @subpackage Jot Shop
 * @since 1.0.0
 */
get_header();?>
   <div id="content">
    <div class="container">
          <div class="content-wrap">
           
              <div class="main-area">
                <?php get_sidebar('primary'); ?>
                <div id="primary" class="primary-content-area">
                  <div class="primary-content-wrap">
                        <?php
                          $section = array(
                                                    
                                                    'categoryslider',
                                                    'productslider',
                                                    'tabproduct',
                                                    'productlist',
                                                    'tabproductlist',
                                                    'banner',
                                                    'ribbon',
                                                    'brand',
                                                    'highlight',
                                                    'featureproduct',
                                                    'customone',
                                                    'customtwo',
                                                    'customthree',
                                                    'customfour',
                                                    );
                          foreach($section as $value):
                            get_template_part( 'front-page/front-'.$value);
                          endforeach;
                        ?>
                  </div>  <!-- end primary-content-wrap-->
                </div>  <!-- end primary primary-content-area-->
                
              </div> <!-- end main-area -->
          </div> <!-- end content-wrap -->
        </div> <!-- end content page-content -->
      </div>
<?php get_footer();