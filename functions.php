<?php
    add_filter('jpeg_quality', function($arg){return 100;});
    add_filter( 'wp_editor_set_quality', function($arg){return 100;} );

    if ( function_exists( 'add_theme_support' ) ) {
        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 500, 300, true ); // default Featured Image dimensions (cropped)
     
        // additional image sizes
        // delete the next line if you do not need additional image sizes
        add_image_size( 'medium-thumb', 1000, 600, true );
        add_image_size( 'large-thumb', 1700, 900, true );

		// Register the three useful image sizes for use in Add Media modal
		add_filter( 'image_size_names_choose', 'wpshout_custom_sizes' );
		function wpshout_custom_sizes( $sizes ) {
	 	   return array_merge( $sizes, array(
 	  	     'medium-thumb' => __( 'Medium Thumb' ),
 	  	     'large-thumb' => __( 'Large Thumb' ),
 	 	  ) );
		}
    }

    add_theme_support( 'jetpack-portfolio' );

    function wpsites_child_theme_posts_formats(){
        add_theme_support(
            'post-formats', array(
                'aside',
                'audio',
                'chat',
                'gallery',
                'image',
                'link',
                'quote',
                'status',
                'video',
            )
        );
    }
    add_action( 'after_setup_theme', 'wpsites_child_theme_posts_formats', 11 );

?>
