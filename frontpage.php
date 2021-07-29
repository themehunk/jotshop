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
           <?php 
           if( shortcode_exists( 'jot-shop' ) ){
             require_once (THEMEHUNK_CUSTOMIZER_PLUGIN_PATH . 'jot-shop/jot-shop-front-page/front-topslider.php');
           }
           ?>
              <div class="main-area">
                <?php get_sidebar('primary'); ?>
                <div id="primary" class="primary-content-area">
                  <div class="primary-content-wrap">
                        <?php
                          if( shortcode_exists( 'jot-shop' ) ){
                             do_shortcode("[jot-shop section='jot_shop_show_frontpage']");
                          }
                        ?>
                  </div>  <!-- end primary-content-wrap-->
                </div>  <!-- end primary primary-content-area-->
                
              </div> <!-- end main-area -->
          </div> <!-- end content-wrap -->
        </div> <!-- end content page-content -->
      </div>
<?php get_footer();