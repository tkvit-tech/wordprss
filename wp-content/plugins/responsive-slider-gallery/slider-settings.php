<?php
// toggle button CSS
wp_enqueue_style( 'awl-toogle-button-css', RSG_PLUGIN_URL . 'css/toogle-button.css' );

// css dropdown toggle
wp_enqueue_style( 'awl-bootstrap-css', RSG_PLUGIN_URL . 'css/bootstrap.css' );
wp_enqueue_style( 'awl-font-awesome-css', RSG_PLUGIN_URL . 'css/font-awesome.css' );
wp_enqueue_style( 'awl-styles-css', RSG_PLUGIN_URL . 'css/styles.css' );

// js
wp_enqueue_script( 'jquery' );
wp_enqueue_script( 'awl-bootstrap-js', RSG_PLUGIN_URL . 'js/bootstrap.min.js', array( 'jquery' ), '', true );

?>
<style>
	.res_slider_settings {
		font-size: 16px !important;
		padding-left: 4px;
		font: initial;
		margin-top: 5px;
		font-weight: 500;
		padding-left:20px;
	}
	.input_width {
		margin-left: 18px !important;
		border-width: 1px 1px 1px 6px !important;
		border-color: #3366ff !important;
		width: 30% !important; 
	}
	#comment-link-box, #edit-slug-box {
		display: none;
	}
</style>

<p class="input-text-wrap">
	<p class="bg-title"><?php esc_html_e( 'A. Width', 'responsive-slider-gallery' ); ?></p><br>
	<?php
	if ( isset( $allslidesetting['width'] ) ) {
		$width = $allslidesetting['width'];
	} else {
		$width = '100%';
	}
	?>
	<input class="input_width" type="text" name="width" id="width" value="<?php echo esc_attr( $width ); ?>"><br>
	<p class="res_slider_settings"><?php esc_html_e( 'Set slider width in pixels and percents like 300px / 600px / 800px OR 25% / 50% / 100%', 'responsive-slider-gallery' ); ?></p>
</p>

<p class="input-text-wrap">
	<p class="bg-title"><?php esc_html_e( 'B. Height', 'responsive-slider-gallery' ); ?></p><br>
	<?php
	if ( isset( $allslidesetting['height'] ) ) {
		$height = $allslidesetting['height'];
	} else {
		$height = '';
	}
	?>
	<input class="input_width" type="text" name="height" id="height" value="<?php echo esc_attr( $height ); ?>"><br>
	<p class="res_slider_settings"><?php esc_html_e( 'Set slider height in pixels and percents like 300px / 600px / 800px OR 25% / 50% / 100%', 'responsive-slider-gallery' ); ?>
</p>

<p class="bg-title"><?php esc_html_e( 'C. Navigation Style', 'responsive-slider-gallery' ); ?></p>
<p class="input-text-wrap switch-field em_size_field">
	<?php
	if ( isset( $allslidesetting['nav-style'] ) ) {
		$navstyle = $allslidesetting['nav-style'];
	} else {
		$navstyle = 'dots';
	}
	?>
	<input type="radio" name="nav-style" id="nav-style1" value="dots" 
	<?php
	if ( $navstyle == 'dots' ) {
		esc_html_e( 'checked=checked', 'responsive-slider-gallery' );}
	?>
	>
	<label for="nav-style1"><?php esc_html_e( 'Dots', 'responsive-slider-gallery' ); ?></label>
	<input type="radio" name="nav-style" id="nav-style3" value="false" 
	<?php
	if ( $navstyle == 'false' ) {
		esc_html_e( 'checked=checked', 'responsive-slider-gallery' );}
	?>
	>
	<label for="nav-style3"><?php esc_html_e( 'None', 'responsive-slider-gallery' ); ?></label>
	<p class="res_slider_settings"><?php esc_html_e( 'Set a navigation style like dots / none', 'responsive-slider-gallery' ); ?></p>
</p>

<div class="dots_hs">
	<p class="input-text-wrap">
		<p class="bg-lower-title"><?php esc_html_e( '1. Navigation Width', 'responsive-slider-gallery' ); ?></p><br>
		<?php
		if ( isset( $allslidesetting['nav-width'] ) ) {
			$navwidth = $allslidesetting['nav-width'];
		} else {
			$navwidth = '';
		}
		?>
		<input class="input_width" type="text" name="nav-width" id="nav-width" value="<?php echo esc_attr( $navwidth ); ?>"><br>
		<p class="res_slider_settings"><?php esc_html_e( 'Set navigation width in pixels or percent', 'responsive-slider-gallery' ); ?></p>
	</p>
</div>

<p class="bg-title"><?php esc_html_e( 'D. Full Screen Slider', 'responsive-slider-gallery' ); ?></p>
<p class="input-text-wrap switch-field em_size_field">
	<?php
	if ( isset( $allslidesetting['fullscreen'] ) ) {
		$fullscreen = $allslidesetting['fullscreen'];
	} else {
		$fullscreen = 'true';
	}
	?>
	<input type="radio" name="fullscreen" id="fullscreen1" value="true" 
	<?php
	if ( $fullscreen == 'true' ) {
		esc_html_e( 'checked=checked', 'responsive-slider-gallery' );}
	?>
	>
		<label for="fullscreen1"><?php esc_html_e( 'True', 'responsive-slider-gallery' ); ?></label>
	<input type="radio" name="fullscreen" id="fullscreen2" value="false" 
	<?php
	if ( $fullscreen == 'false' ) {
		esc_html_e( 'checked=checked', 'responsive-slider-gallery' );}
	?>
	>
		<label for="fullscreen2"><?php esc_html_e( 'False', 'responsive-slider-gallery' ); ?></label>
	<p class="res_slider_settings"><?php esc_html_e( 'Set full screen view of slider like True / False / Native', 'responsive-slider-gallery' ); ?></p>
</p>

<p class="bg-title"><?php esc_html_e( 'E. Fit Slides', 'responsive-slider-gallery' ); ?></p>
<p class="input-text-wrap switch-field em_size_field">
	<?php
	if ( isset( $allslidesetting['fit-slides'] ) ) {
		$fitslides = $allslidesetting['fit-slides'];
	} else {
		$fitslides = 'cover';
	}
	?>
	<input type="radio" name="fit-slides" id="fit-slides2" value="cover" 
	<?php
	if ( $fitslides == 'cover' ) {
		esc_html_e( 'checked=checked', 'responsive-slider-gallery' );}
	?>
	>
	<label for="fit-slides2"><?php esc_html_e( 'Cover', 'responsive-slider-gallery' ); ?></label>
	<input type="radio" name="fit-slides" id="fit-slides4" value="none" 
	<?php
	if ( $fitslides == 'none' ) {
		esc_html_e( 'checked=checked', 'responsive-slider-gallery' );}
	?>
	>
	<label for="fit-slides4"><?php esc_html_e( 'None', 'responsive-slider-gallery' ); ?></label>
	<p class="res_slider_settings"><?php esc_html_e( 'Set how to fit slides into slider frame', 'responsive-slider-gallery' ); ?></p>
</p>

<p class="input-text-wrap">
	<p class="bg-title"><?php esc_html_e( 'F. Transition Effect Duration', 'responsive-slider-gallery' ); ?></p><br>
	<?php
	if ( isset( $allslidesetting['transition-duration'] ) ) {
		$transitionduration = $allslidesetting['transition-duration'];
	} else {
		$transitionduration = '300';
	}
	?>
	<input class="input_width" type="text" name="transition-duration" id="transition-duration" value="<?php echo esc_html( $transitionduration ); ?>"><br>
	<p class="res_slider_settings"><?php esc_html_e( 'Set transition effect duration in millisecond between slides like 50 / 100 / 250 / 500', 'responsive-slider-gallery' ); ?></p>
</p>

<p class="bg-title"><?php esc_html_e( 'G. Slider Text', 'responsive-slider-gallery' ); ?></p>
<p class="input-text-wrap switch-field em_size_field">
	<?php
	if ( isset( $allslidesetting['slide-text'] ) ) {
		$slidetext = $allslidesetting['slide-text'];
	} else {
		$slidetext = 'false';
	}
	?>
	<input type="radio" name="slide-text" id="slide-text1" value="true" 
	<?php
	if ( $slidetext == 'true' ) {
		esc_html_e( 'checked=checked', 'responsive-slider-gallery' );}
	?>
	>
	<label for="slide-text1"><?php esc_html_e( 'Yes', 'responsive-slider-gallery' ); ?></label>
	<input type="radio" name="slide-text" id="slide-text2" value="false" 
	<?php
	if ( $slidetext == 'false' ) {
		esc_html_e( 'checked=checked', 'responsive-slider-gallery' );}
	?>
	>
	<label for="slide-text2"><?php esc_html_e( 'No', 'responsive-slider-gallery' ); ?></label>
	<p class="res_slider_settings"><?php esc_html_e( 'Set slider text visibility on slider', 'responsive-slider-gallery' ); ?></p>
</p>

<p class="bg-title"><?php esc_html_e( 'H. Auto Play', 'responsive-slider-gallery' ); ?></p>
<p class="input-text-wrap switch-field em_size_field">
	<?php
	if ( isset( $allslidesetting['autoplay'] ) ) {
		$autoplay = $allslidesetting['autoplay'];
	} else {
		$autoplay = 'true';
	}
	?>
	<input type="radio" name="autoplay" id="autoplay1" value="true" 
	<?php
	if ( $autoplay == 'true' ) {
		esc_html_e( 'checked=checked', 'responsive-slider-gallery' );}
	?>
	>
	<label for="autoplay1"><?php esc_html_e( 'Yes', 'responsive-slider-gallery' ); ?></label>
	<input type="radio" name="autoplay" id="autoplay2" value="false" 
	<?php
	if ( $autoplay == 'false' ) {
		esc_html_e( 'checked=checked', 'responsive-slider-gallery' );}
	?>
	>
	<label for="autoplay2"><?php esc_html_e( 'No', 'responsive-slider-gallery' ); ?></label>
	<p class="res_slider_settings"><?php esc_html_e( 'Set auto play to slides automatically', 'responsive-slider-gallery' ); ?></p>
</p>

<p class="bg-title"><?php esc_html_e( 'I. Loop', 'responsive-slider-gallery' ); ?></p>
<p class="input-text-wrap switch-field em_size_field">
	<?php
	if ( isset( $allslidesetting['loop'] ) ) {
		$loop = $allslidesetting['loop'];
	} else {
		$loop = 'true';
	}
	?>
	<input type="radio" name="loop" id="loop1" value="true" 
	<?php
	if ( $loop == 'true' ) {
		esc_html_e( 'checked=checked', 'responsive-slider-gallery' );}
	?>
	>
	<label for="loop1"><?php esc_html_e( 'Yes', 'responsive-slider-gallery' ); ?></label>
	<input type="radio" name="loop" id="loop2" value="false" 
	<?php
	if ( $loop == 'false' ) {
		esc_html_e( 'checked=checked', 'responsive-slider-gallery' );}
	?>
	>
	<label for="loop2"><?php esc_html_e( 'No', 'responsive-slider-gallery' ); ?></label>
	<p class="res_slider_settings"><?php esc_html_e( 'Set loop to slides continuously', 'responsive-slider-gallery' ); ?></p>
</p>

<p class="bg-title"><?php esc_html_e( 'J. Navigation Arrow', 'responsive-slider-gallery' ); ?></p>
<p class="input-text-wrap switch-field em_size_field">
	<?php
	if ( isset( $allslidesetting['nav-arrow'] ) ) {
		$navarrow = $allslidesetting['nav-arrow'];
	} else {
		$navarrow = 'true';
	}
	?>
	<input type="radio" name="nav-arrow" id="nav-arrow2" value="true" 
	<?php
	if ( $navarrow == 'true' ) {
		esc_html_e( 'checked=checked', 'responsive-slider-gallery' );}
	?>
	>
	<label for="nav-arrow2"><?php esc_html_e( 'Show', 'responsive-slider-gallery' ); ?></label>
	<input type="radio" name="nav-arrow" id="nav-arrow3" value="false" 
	<?php
	if ( $navarrow == 'false' ) {
		esc_html_e( 'checked=checked', 'responsive-slider-gallery' );}
	?>
	>
	<label for="nav-arrow3"><?php esc_html_e( 'Hide', 'responsive-slider-gallery' ); ?></label>
	<p class="res_slider_settings"><?php esc_html_e( 'Set navigation arrow display options', 'responsive-slider-gallery' ); ?></p>
</p>

<p class="bg-title"><?php esc_html_e( 'K. Touch Slide', 'responsive-slider-gallery' ); ?></p>
<p class="input-text-wrap switch-field em_size_field">
	<?php
	if ( isset( $allslidesetting['touch-slide'] ) ) {
		$touchslide = $allslidesetting['touch-slide'];
	} else {
		$touchslide = 'true';
	}
	?>
	<input type="radio" name="touch-slide" id="touch-slide1" value="true" 
	<?php
	if ( $touchslide == 'true' ) {
		esc_html_e( 'checked=checked', 'responsive-slider-gallery' );}
	?>
	>
	<label for="touch-slide1"><?php esc_html_e( 'Yes', 'responsive-slider-gallery' ); ?></label>
	<input type="radio" name="touch-slide" id="touch-slide2" value="false" 
	<?php
	if ( $touchslide == 'false' ) {
		esc_html_e( 'checked=checked', 'responsive-slider-gallery' );}
	?>
	>
	<label for="touch-slide2"><?php esc_html_e( 'No', 'responsive-slider-gallery' ); ?></label>
	<p class="res_slider_settings"><?php esc_html_e( 'Set touch slide to slide images using mouse touch or swipe action', 'responsive-slider-gallery' ); ?></p>
</p>

<p class="bg-title"><?php esc_html_e( 'L. Slide Loading Spinner', 'responsive-slider-gallery' ); ?></p>
<p class="input-text-wrap switch-field em_size_field">		
	<?php
	if ( isset( $allslidesetting['spinner'] ) ) {
		$spinner = $allslidesetting['spinner'];
	} else {
		$spinner = 'true';
	}
	?>
	<input type="radio" name="spinner" id="spinner1" value="true" 
	<?php
	if ( $spinner == 'true' ) {
		esc_html_e( 'checked=checked', 'responsive-slider-gallery' );}
	?>
	>
	<label for="spinner1"><?php esc_html_e( 'Yes', 'responsive-slider-gallery' ); ?></label>
	<input type="radio" name="spinner" id="spinner2" value="false" 
	<?php
	if ( $spinner == 'false' ) {
		esc_html_e( 'checked=checked', 'responsive-slider-gallery' );}
	?>
	>
	<label for="spinner2"><?php esc_html_e( 'No', 'responsive-slider-gallery' ); ?></label>
	<p class="res_slider_settings"><?php esc_html_e( 'Set loading spinner option to show spinner while loading slides', 'responsive-slider-gallery' ); ?></p>
</p>

<p class="bg-title"><?php esc_html_e( 'M. Premium Version Settings', 'responsive-slider-gallery' ); ?></p>
<p class="bg-lower-title"><?php esc_html_e( 'Ratio/Margin/Glimpse Settings', 'responsive-slider-gallery' ); ?></p>
<p class="bg-lower-title"><?php esc_html_e( 'Thumbnail Settings', 'responsive-slider-gallery' ); ?></p>
<p class="bg-lower-title"><?php esc_html_e( 'Full Screen Slider', 'responsive-slider-gallery' ); ?></p>
<p class="bg-lower-title"><?php esc_html_e( 'Slide Direction', 'responsive-slider-gallery' ); ?></p>
<p class="bg-lower-title"><?php esc_html_e( 'Click Transition', 'responsive-slider-gallery' ); ?></p>
<p class="bg-lower-title"><?php esc_html_e( 'Transition Effects', 'responsive-slider-gallery' ); ?></p>
<p class="bg-lower-title"><?php esc_html_e( 'Shuffle Slide Show', 'responsive-slider-gallery' ); ?></p>
<p class="bg-lower-title"><?php esc_html_e( 'Stop Auto Play On Touch', 'responsive-slider-gallery' ); ?></p>
<p class="bg-lower-title"><?php esc_html_e( 'Fit Slides', 'responsive-slider-gallery' ); ?></p>
<p class="bg-lower-title"><?php esc_html_e( 'Slider Text Option', 'responsive-slider-gallery' ); ?></p>
<p class="res_slider_settings"><?php esc_html_e( 'Upgrade To Pro Version For This All Settings', 'responsive-slider-gallery' ); ?>
	<a href="<?php echo esc_url( 'https://awplife.com/wordpress-plugins/responsive-slider-gallery-premium/' ); ?>" target="_blank"><?php esc_html_e( 'Buy Premium Version', 'responsive-slider-gallery' ); ?></a>
</p>

<input type="hidden" name="awl-save-settings" id="awl-save-settings" value="save-settings">

<hr>
	<p class="">
		<a href="<?php echo esc_url( 'https://awplife.com/demo/responsive-slider-gallery-premium/' ); ?>" target="_blank" class="button button-primary button-hero load-customize hide-if-no-customize"><?php esc_html_e( 'Check Premium Version Live Demo', 'responsive-slider-gallery' ); ?></a>
		<a href="<?php echo esc_url( 'https://awplife.com/demo/responsive-slider-gallery-premium-admin/' ); ?>" target="_blank" class="button button-primary button-hero load-customize hide-if-no-customize"><?php esc_html_e( 'Try Premium Version Admin Demo', 'responsive-slider-gallery' ); ?></a>
		<a href="<?php echo esc_url( 'https://awplife.com/wordpress-plugins/responsive-slider-gallery-premium/' ); ?>" target="_blank" class="button button-primary button-hero load-customize hide-if-no-customize"><?php esc_html_e( 'Buy Premium Version', 'responsive-slider-gallery' ); ?></a>
	</p>
	<hr>
	<style>
		.awp_bale_offer {
			background-image: url("<?php echo esc_url(plugin_dir_url( __FILE__ ). 'image/awp-bale.jpg' );?>");
			background-repeat:no-repeat;
			padding:30px;
		}
		.awp_bale_offer h1 {
			font-size:35px;
			color:#000000;
		}
		.awp_bale_offer h3 {
			font-size:25px;
			color:#000000;
		}
		.awp_bale_offer h2 {
			font-size:25px !important;
			color:#000002;
		}
	</style>
	<div class="row awp_bale_offer">
		<div class="">
			<h1><?php esc_html_e( 'Plugins Bale Offer', 'responsive-slider-gallery' ); ?></h1>
			<h3><?php esc_html_e( 'Get All Premium Plugin - 23+ Premium Plugins ( Personal Licence) in just $179', 'responsive-slider-gallery' ); ?> </h3>
			<h4> <?php esc_html_e( '8+ gallery plugins, 3+ Slider Plugin , Event , Testimonial , Contact Form, Social media, Popup Box, Weather Effect, Social share', 'responsive-slider-gallery' ); ?> </h4>
			<h3><strike><?php esc_html_e( '$399', 'responsive-slider-gallery' ); ?></strike> <?php esc_html_e( '$179 Only', 'responsive-slider-gallery' ); ?></h3>
		</div>
		<div class="">
			<a href="<?php echo esc_url( 'http://awplife.com/account/signup/all-premium-plugins' ); ?>" target="_blank" class="button button-primary button-hero load-customize hide-if-no-customize"><?php esc_html_e( 'BUY NOW', 'responsive-slider-gallery' ); ?></a>
		</div>
	</div>
	<hr>
	<p>
		<h1><strong><?php esc_html_e( 'Try Our Other Free Plugins :', 'responsive-slider-gallery' ); ?></strong></h1><br>
		<a href="<?php echo esc_url( 'https://wordpress.org/plugins/portfolio-filter-gallery/' ); ?>" target="_blank" class="button button-primary load-customize hide-if-no-customize"><?php esc_html_e( 'Portfolio Filter Gallery', 'responsive-slider-gallery' ); ?></a>
		<a href="<?php echo esc_url( 'https://wordpress.org/plugins/blog-filter/' ); ?>" target="_blank" class="button button-primary load-customize hide-if-no-customize"><?php esc_html_e( 'Blog Filter Gallery', 'responsive-slider-gallery' ); ?></a>
		<a href="<?php echo esc_url( 'https://wordpress.org/plugins/new-grid-gallery/' ); ?>" target="_blank" class="button button-primary  load-customize hide-if-no-customize"><?php esc_html_e( 'Grid Gallery', 'responsive-slider-gallery' ); ?></a>
		<a href="<?php echo esc_url( 'https://wordpress.org/plugins/new-social-media-widget/' ); ?>" target="_blank" class="button button-primary load-customize hide-if-no-customize"><?php esc_html_e( 'Social Media', 'responsive-slider-gallery' ); ?></a>
		<a href="<?php echo esc_url( 'https://wordpress.org/plugins/new-image-gallery/' ); ?>" target="_blank" class="button button-primary load-customize hide-if-no-customize"><?php esc_html_e( 'Image Gallery', 'responsive-slider-gallery' ); ?></a>
		<a href="<?php echo esc_url( 'https://wordpress.org/plugins/new-photo-gallery/' ); ?>" target="_blank" class="button button-primary load-customize hide-if-no-customize"><?php esc_html_e( 'Photo Gallery', 'responsive-slider-gallery' ); ?></a>
		<a href="<?php echo esc_url( 'https://wordpress.org/plugins/responsive-slider-gallery/' ); ?>" target="_blank" class="button button-primary load-customize hide-if-no-customize"><?php esc_html_e( 'Responsive Slider Gallery', 'responsive-slider-gallery' ); ?></a>
		<a href="<?php echo esc_url( 'https://wordpress.org/plugins/new-contact-form-widget/' ); ?>" target="_blank" class="button button-primary load-customize hide-if-no-customize"><?php esc_html_e( 'Contact Form Widget', 'responsive-slider-gallery' ); ?></a><br><br>
		<a href="<?php echo esc_url( 'https://wordpress.org/plugins/facebook-likebox-widget-and-shortcode/' ); ?>" target="_blank" class="button button-primary load-customize hide-if-no-customize"><?php esc_html_e( 'Facebook Likebox Plugin', 'responsive-slider-gallery' ); ?></a>
		<a href="<?php echo esc_url( 'https://wordpress.org/plugins/slider-responsive-slideshow/' ); ?>" target="_blank" class="button button-primary load-customize hide-if-no-customize"><?php esc_html_e( 'Slider Responsive Slideshow', 'responsive-slider-gallery' ); ?></a>
		<a href="<?php echo esc_url( 'https://wordpress.org/plugins/new-video-gallery/' ); ?>" target="_blank" class="button button-primary load-customize hide-if-no-customize"><?php esc_html_e( 'Video Gallery', 'responsive-slider-gallery' ); ?></a><br><br>
		<a href="<?php echo esc_url( 'https://wordpress.org/plugins/new-facebook-like-share-follow-button/' ); ?>" target="_blank" class="button button-primary load-customize hide-if-no-customize"><?php esc_html_e( 'Facebook Like Share Follow Button', 'responsive-slider-gallery' ); ?></a>
		<a href="<?php echo esc_url( 'https://wordpress.org/plugins/new-google-plus-badge/' ); ?>" target="_blank" class="button button-primary load-customize hide-if-no-customize"><?php esc_html_e( 'Google Plus Badge', 'responsive-slider-gallery' ); ?></a>
		<a href="<?php echo esc_url( 'https://wordpress.org/plugins/media-slider/' ); ?>" target="_blank" class="button button-primary load-customize hide-if-no-customize"><?php esc_html_e( 'Media Slider', 'responsive-slider-gallery' ); ?></a>
		<a href="<?php echo esc_url( 'https://wordpress.org/plugins/weather-effect/' ); ?>" target="_blank" class="button button-primary load-customize hide-if-no-customize"><?php esc_html_e( 'Weather Effect', 'responsive-slider-gallery' ); ?></a>
		<a href="<?php echo esc_url( 'https://wordpress.org/plugins/insta-type-gallery/' ); ?>" target="_blank" class="button button-primary load-customize hide-if-no-customize"><?php esc_html_e( 'Instagram Type Gallery', 'responsive-slider-gallery' ); ?></a>
	</p><br>
	<!-- Return to Top -->
	<a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>	
	<?php
		// syntax: wp_nonce_field( 'name_of_my_action', 'name_of_nonce_field' );
		wp_nonce_field( 'save_settings', 'rsg_save_nonce' );
	?>
		
<script>
	// ===== Scroll to Top ==== 
	jQuery(window).scroll(function() {
		if (jQuery(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
			jQuery('#return-to-top').fadeIn(200);    // Fade in the arrow
		} else {
			jQuery('#return-to-top').fadeOut(200);   // Else fade out the arrow
		}
	});
	jQuery('#return-to-top').click(function() {      // When arrow is clicked
		jQuery('body,html').animate({
			scrollTop : 0                       // Scroll to top of body
		}, 500);
	});
	
// Show Hide Settings
	// Navigation settings start
	var nav_style = jQuery('input[name="nav-style"]:checked').val();
		//on change to enable & disable navigation Setting
		if(nav_style == "dots") {
			jQuery('.dots_hs').show();
		}
		if(nav_style == "false") {
			jQuery('.dots_hs').hide();
		}

		//on change to enable & disable navigation Setting
		jQuery(document).ready(function() {
			jQuery('input[name="nav-style"]').change(function(){
				var nav_style = jQuery('input[name="nav-style"]:checked').val();
				if(nav_style == "dots") {
					jQuery('.dots_hs').show();
				}
				if(nav_style == "false") {
					jQuery('.dots_hs').hide();
				}
			});
		});
	// Navigation Setting End
	
	// Auto Play settings start
	var autoplay = jQuery('input[name="autoplay"]:checked').val();
		//on change to enable & disable navigation Setting
		if(autoplay == "true") {
			jQuery('.auto_sh').show();
		}
		if(autoplay == "false") {
			jQuery('.auto_sh').hide();
		}

		//on change to enable & disable Auto Play Setting
		jQuery(document).ready(function() {
			jQuery('input[name="autoplay"]').change(function(){
				var autoplay = jQuery('input[name="autoplay"]:checked').val();
				if(autoplay == "true") {
					jQuery('.auto_sh').show();
				}
				if(autoplay == "false") {
					jQuery('.auto_sh').hide();
				}
			});
		});
	// Auto Play Setting End
//show hide settings end

	//dropdown toggle on change effect
	jQuery(document).ready(function() {
		//accordion icon
		jQuery(function() {
			function toggleSign(e) {
				jQuery(e.target)
				.prev('.panel-heading')
				.find('i')
				.toggleClass('fa fa-chevron-down fa fa-chevron-up');
			}
			jQuery('#accordion').on('hidden.bs.collapse', toggleSign);
			jQuery('#accordion').on('shown.bs.collapse', toggleSign);

			});
		});
	
	// start pulse on page load
	function pulseEff() {
	   jQuery('#shortcode').fadeOut(600).fadeIn(600);
	};
	var Interval;
	Interval = setInterval(pulseEff,1500);

	// stop pulse
	function pulseOff() {
		clearInterval(Interval);
	}
	// start pulse
	function pulseStart() {
		Interval = setInterval(pulseEff,1500);
	}
</script>		
