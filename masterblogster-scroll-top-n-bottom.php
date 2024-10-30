<?php

/*
Plugin Name: Masterblogster Scroll Top and Bottom
Plugin URI: http://masterblogster.com/plugins/masterblogster-scroll-top-bottom
Description: MasterBlogster scroll top and bottom plugin adds scroll button to your WordPress website to smoothly scroll to top and bottom areas.
Author: Shrinivas Naik
Version: 1.0
Author URI: http://masterblogster.com
*/

/* --------------------------------------------------------------------------------------------------------------------*/
/*  Main plugin code */
function mb_scrolltopandbottom_footer_code()
{
?>
    <div style="position:fixed !important; top:90%; left:90% ">
        <div id="mb_top_btn">
        <img src="<?php echo plugins_url('top_btn.png', __FILE__ ) ?>"  />
        </div>
        <div id="mb_bottom_btn">
       	<img src="<?php echo plugins_url('bottom_btn.png', __FILE__ ) ?>"  />
        </div>
    </div>
    
    <script>
    jQuery(document).ready(function($) {
    	jQuery("#mb_bottom_btn").click(function() {
			jQuery("html, body").animate({ scrollTop: jQuery(document).height()}, 2000);
		});
		jQuery("#mb_top_btn").click(function() {
			jQuery("html, body").animate({ scrollTop: 0}, 2000);
		});
    });
    </script>  
    
    <?php

} //function ended

add_action('wp_footer','mb_scrolltopandbottom_footer_code');

add_action('wp_enqueue_scripts', 'load_scripts_for_mb_scrolltopandbottom');
function load_scripts_for_mb_scrolltopandbottom() {
    wp_enqueue_script('jquery');
	wp_register_style('scroll-top-n-bottom-css', plugins_url('scroll-top-n-bottom-css.css', __FILE__) );
    wp_enqueue_style('scroll-top-n-bottom-css');
}

?>