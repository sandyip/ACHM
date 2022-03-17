<?php 
	function achm_styles(){
		//css
		wp_register_style('custom_css' , get_template_directory_uri() . '/style.css');
		wp_enqueue_style('custom_css');

		wp_register_style('bootstrap' , get_template_directory_uri() . '/assets/css/bootstrap.min.css');
		wp_enqueue_style('bootstrap');

		wp_register_style('animate' , get_template_directory_uri() . '/assets/css/animate.min.css');
		wp_enqueue_style('animate');

		wp_register_style('magnific' , get_template_directory_uri() . '/assets/css/magnific-popup.css');
		wp_enqueue_style('magnific');

		wp_register_style('fontawesome' , get_template_directory_uri() . '/assets/css/fontawesome-all.min.css');
		wp_enqueue_style('fontawesome');

		wp_register_style('carousel' , get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
		wp_enqueue_style('carousel');

		wp_register_style('ui' , get_template_directory_uri() . '/assets/css/jquery-ui.min.css');
		wp_enqueue_style('ui');

		wp_register_style('flaticon' , get_template_directory_uri() . '/assets/css/flaticon.css');
		wp_enqueue_style('flaticon');

		wp_register_style('odometer' , get_template_directory_uri() . '/assets/css/odometer.css');
		wp_enqueue_style('odometer');

		wp_register_style('aos' , get_template_directory_uri() . '/assets/css/aos.css');
		wp_enqueue_style('aos');

		wp_register_style('slick' , get_template_directory_uri() . '/assets/css/slick.css');
		wp_enqueue_style('slick');

		wp_register_style('default' , get_template_directory_uri() . '/assets/css/default.css');
		wp_enqueue_style('default');

		wp_register_style('style' , get_template_directory_uri() . '/assets/css/style.css');
		wp_enqueue_style('style');

		wp_register_style('responsive' , get_template_directory_uri() . '/assets/css/responsive.css');
		wp_enqueue_style('responsive');


	}
	add_action("wp_enqueue_scripts","achm_styles");

	//javascript
	function achm_java(){
		wp_register_script('jquery' , get_template_directory_uri() .'/assets/js/vendor/jquery-3.5.0.min.js' ,array(),1,1,1 );
		wp_enqueue_script('jquery');

		wp_register_script('popper' , get_template_directory_uri() .'/assets/js/popper.min.js' ,array(),1,1,1 );
		wp_enqueue_script('popper');

		wp_register_script('bootstrapjs' , get_template_directory_uri() .'/assets/js/bootstrap.min.js' ,array(),1,1,1 );
		wp_enqueue_script('bootstrapjs');

		wp_register_script('isotope' , get_template_directory_uri() .'/assets/js/isotope.pkgd.min.js' ,array(),1,1,1 );
		wp_enqueue_script('isotope');

		wp_register_script('imagesloaded' , get_template_directory_uri() .'/assets/js/imagesloaded.pkgd.min.js' ,array(),1,1,1 );
		wp_enqueue_script('imagesloaded');

		wp_register_script('magnificjs' , get_template_directory_uri() .'/assets/js/jquery.magnific-popup.min.js' ,array(),1,1,1 );
		wp_enqueue_script('magnificjs');

		wp_register_script('carouseljs' , get_template_directory_uri() .'/assets/js/owl.carousel.min.js' ,array(),1,1,1 );
		wp_enqueue_script('carouseljs');

		wp_register_script('odometerjs' , get_template_directory_uri() .'/assets/js/jquery.odometer.min.js' ,array(),1,1,1 );
		wp_enqueue_script('odometerjs');

		wp_register_script('uijs' , get_template_directory_uri() .'/assets/js/jquery-ui.min.js' ,array(),1,1,1 );
		wp_enqueue_script('uijs');

		wp_register_script('appearjs' , get_template_directory_uri() .'/assets/js/jquery.appear.js' ,array(),1,1,1 );
		wp_enqueue_script('appearjs');

		wp_register_script('slickjs' , get_template_directory_uri() .'/assets/js/slick.min.js' ,array(),1,1,1 );
		wp_enqueue_script('slickjs');

		wp_register_script('ajax' , get_template_directory_uri() .'/assets/js/ajax-form.js' ,array(),1,1,1 );
		wp_enqueue_script('ajax');

		wp_register_script('wow' , get_template_directory_uri() .'/assets/js/wow.min.js' ,array(),1,1,1 );
		wp_enqueue_script('wow');

		wp_register_script('aosjs' , get_template_directory_uri() .'/assets/js/aos.js' ,array(),1,1,1 );
		wp_enqueue_script('aosjs');

		wp_register_script('plugins' , get_template_directory_uri() .'/assets/js/plugins.js' ,array(),1,1,1 );
		wp_enqueue_script('plugins');

		wp_register_script('main' , get_template_directory_uri() .'/assets/js/main.js' ,array(),1,1,1 );
		wp_enqueue_script('main');

	}
	add_action("wp_enqueue_scripts","achm_java");

//===========================theme support=================================

function achm_setup_theme(){
	add_theme_support('title-tag');
	add_theme_support('custom-logo');
	add_theme_support('post-thumbnails');
	


}
add_action('after_setup_theme','achm_setup_theme');

//=============================theme customizer===================================

function achm_customize_register($wp_customize){
    //header section

    $wp_customize-> add_section('achm_header_section', [
        'title' => __('Header Section', 'achm'),
        'priority' => 30,
    ]);

    
    //phone number
    $wp_customize -> add_setting('achm_phone_handle',[
        'default' => ''
    ]);
    $wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'achm_phone_handle_input', array(
        'label' => __('Phone Number', 'achm'),
        'section' => 'achm_header_section',
        'settings' => 'achm_phone_handle',
        'description' => __('please enter your phone Number'),
        
    ))); 

    //email address
    $wp_customize -> add_setting('achm_email_handle',[
        'default' => ''
    ]);
    $wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'achm_email_handle_input', array(
        'label' => __('Email Address', 'achm'),
        'section' => 'achm_header_section',
        'settings' => 'achm_email_handle',
        'description' => __('please enter your email address'),
        'type'   => 'email',
        
    ))); 

    //follow us 
    //facebook
    $wp_customize -> add_setting('achm_facebook_handle',[
        'default' => ''
    ]);
    $wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'achm_facebook_handle_input', array(
        'label' => __('Facebook Link', 'achm'),
        'section' => 'achm_header_section',
        'settings' => 'achm_facebook_handle',
        'description' => __('please enter your Facebook Link'),
        'type'   => 'link',
        
    )));

    //twitter
     $wp_customize -> add_setting('achm_twitter_handle',[
        'default' => ''
    ]);
    $wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'achm_twitter_handle_input', array(
        'label' => __('Twitter Link', 'achm'),
        'section' => 'achm_header_section',
        'settings' => 'achm_twitter_handle',
        'description' => __('please enter your Twitter Link'),
        'type'   => 'link',
        
    )));

    //pinterest
     $wp_customize -> add_setting('achm_pinterest_handle',[
        'default' => ''
    ]);
    $wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'achm_pinterest_handle_input', array(
        'label' => __('Pinterest Link', 'achm'),
        'section' => 'achm_header_section',
        'settings' => 'achm_pinterest_handle',
        'description' => __('please enter your Pinterest Link'),
        'type'   => 'link',
        
    )));

    //Linkedin
     $wp_customize -> add_setting('achm_linkedin_handle',[
        'default' => ''
    ]);
    $wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'achm_linkedin_handle_input', array(
        'label' => __('Linkedin Link', 'achm'),
        'section' => 'achm_header_section',
        'settings' => 'achm_linkedin_handle',
        'description' => __('please enter your Linkedin Link'),
        'type'   => 'link',
        
    )));
}
add_action('customize_register', 'achm_customize_register');

//============================dynamic menu part======================================
 function register_menu(){
 	register_nav_menus(
 		array(
 			'primary-menu'   => 'Primary Main Menu',
 			'footer-menu'    => 'Footer Menu'
 		)
 	);
 }
 add_action("init", "register_menu");

// function selected_class($classes,$item){
// 	if(in_array('menu-item-41',$classes)){
// 		$classes[] = 'current dropdown';
// 	}
// 	return $classes;

// }
// add_filter('nav_menu_css_class','selected_class', 10,2);

//======================================slider cpt=============================

function slider_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Sliders', 'Post Type General Name', 'achm' ),
        'singular_name'       => _x( 'Slider', 'Post Type Singular Name', 'achm' ),
        'menu_name'           => __( 'Sliders', 'achm' ),
        'parent_item_colon'   => __( 'Parent Slider', 'achm' ),
        'all_items'           => __( 'All Sliders', 'achm' ),
        'view_item'           => __( 'View Slider', 'achm' ),
        'add_new_item'        => __( 'Add New Slider', 'achm' ),
        'add_new'             => __( 'Add New', 'achm' ),
        'edit_item'           => __( 'Edit Slider', 'achm' ),
        'update_item'         => __( 'Update Slider', 'achm' ),
        'search_items'        => __( 'Search Slider', 'achm' ),
        'not_found'           => __( 'Not Found', 'achm' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'achm' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'sliders', 'achm' ),
        'description'         => __( 'Slider news and reviews', 'achm' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-format-image',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
 
    );
     
    // Registering your Custom Post Type
    register_post_type( 'sliders', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'slider_post_type', 0 );

//===========================partners cpt=======================================
 
function partner_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Partners', 'Post Type General Name', 'achm' ),
        'singular_name'       => _x( 'Partner', 'Post Type Singular Name', 'achm' ),
        'menu_name'           => __( 'Partners', 'achm' ),
        'parent_item_colon'   => __( 'Parent Partner', 'achm' ),
        'all_items'           => __( 'All Partners', 'achm' ),
        'view_item'           => __( 'View Partner', 'achm' ),
        'add_new_item'        => __( 'Add New Partner', 'achm' ),
        'add_new'             => __( 'Add New', 'achm' ),
        'edit_item'           => __( 'Edit Partner', 'achm' ),
        'update_item'         => __( 'Update Partner', 'achm' ),
        'search_items'        => __( 'Search Partner', 'achm' ),
        'not_found'           => __( 'Not Found', 'achm' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'achm' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'partners', 'achm' ),
        'description'         => __( 'Partner news and reviews', 'achm' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title','thumbnail'),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-cover-image',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
 
    );
     
    // Registering your Custom Post Type
    register_post_type( 'partners', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'partner_post_type', 0 );

//============================== Testimonial Cpt================================ 
function testimonial_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Testimonials', 'Post Type General Name', 'achm' ),
        'singular_name'       => _x( 'Testimonial', 'Post Type Singular Name', 'achm' ),
        'menu_name'           => __( 'Testimonials', 'achm' ),
        'parent_item_colon'   => __( 'Parent Testimonial', 'achm' ),
        'all_items'           => __( 'All Testimonials', 'achm' ),
        'view_item'           => __( 'View Testimonial', 'achm' ),
        'add_new_item'        => __( 'Add New Testimonial', 'achm' ),
        'add_new'             => __( 'Add New', 'achm' ),
        'edit_item'           => __( 'Edit Testimonial', 'achm' ),
        'update_item'         => __( 'Update Testimonial', 'achm' ),
        'search_items'        => __( 'Search Testimonial', 'achm' ),
        'not_found'           => __( 'Not Found', 'achm' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'achm' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'testimonials', 'achm' ),
        'description'         => __( 'Testimonial news and reviews', 'achm' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor',  'thumbnail',  'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-admin-users',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
 
    );
     
    // Registering your Custom Post Type
    register_post_type( 'testimonials', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'testimonial_post_type', 0 );


//==============================All Course CPT===============================

function create_course_function(){
    $labels = array(
        'name' => _x('Courses', 'post type general name', 'your_text_domain'),
        'singular_name' => _x('Course', 'post type Singular name', 'your_text_domain'),
        'add_new' => _x('Add course', '', 'your_text_domain'),
        'add_new_item' => __('Add New Course', 'your_text_domain'),
        'edit_item' => __('Edit Course', 'your_text_domain'),
        'new_item' => __('New Course', 'your_text_domain'),
        'all_items' => __('All Courses', 'your_text_domain'),
        'view_item' => __('View Courses', 'your_text_domain'),
        'search_items' => __('Search Course', 'your_text_domain'),
        'not_found' => __('No Course found', 'your_text_domain'),
        'not_found_in_trash' => __('No course on trash', 'your_text_domain'),
        'parent_item_colon' => '',
        'menu_name' => __('Browse Courses', 'your_text_domain')
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'course'),
        'capability_type' => 'page',
        'has_archive' => true,
        'hierarchical' => true,
        'menu_position' => 6,
        'menu_icon' => 'dashicons-media-default',
        'supports' => array('title', 'thumbnail', 'editor','excerpt','page-attributes')
    );
    $labels = array(
        'name' => __('Category'),
        'singular_name' => __('Category'),
        'search_items' => __('Search'),
        'popular_items' => __('More Used'),
        'all_items' => __('All Categories'),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __('Add new'),
        'update_item' => __('Update'),
        'add_new_item' => __('Add new Category'),
        'new_item_name' => __('New')
    );
    register_taxonomy('course_category', array('courses'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'singular_label' => 'course_category',
        'all_items' => 'Category',
        'query_var' => true,
        'rewrite' => array('slug' => 'course_category'))
    );
    register_post_type('courses', $args);
    flush_rewrite_rules();
}
add_action('init', 'create_course_function');


/* --
 End of Custom post type and taxonomy for course
 
-- */


//=============================courses cpt====================================
 
function course_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Courses', 'Post Type General Name', 'achm' ),
        'singular_name'       => _x( 'Course', 'Post Type Singular Name', 'achm' ),
        'menu_name'           => __( ' ACHM Courses', 'achm' ),
        'parent_item_colon'   => __( 'Parent Course', 'achm' ),
        'all_items'           => __( 'All Courses', 'achm' ),
        'view_item'           => __( 'View Course', 'achm' ),
        'add_new_item'        => __( 'Add New Course', 'achm' ),
        'add_new'             => __( 'Add New', 'achm' ),
        'edit_item'           => __( 'Edit Course', 'achm' ),
        'update_item'         => __( 'Update Course', 'achm' ),
        'search_items'        => __( 'Search Course', 'achm' ),
        'not_found'           => __( 'Not Found', 'achm' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'achm' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'courses', 'achm' ),
        'description'         => __( 'Course news and reviews', 'achm' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-welcome-write-blog',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
 
    );
     
    // Registering your Custom Post Type
    register_post_type( 'courses', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'course_post_type', 0 );

//======================================domestic courses cpt===================================
 
function domestic_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Domestics', 'Post Type General Name', 'achm' ),
        'singular_name'       => _x( 'Domestic', 'Post Type Singular Name', 'achm' ),
        'menu_name'           => __( 'Domestic Course', 'achm' ),
        'parent_item_colon'   => __( 'Parent Domestic', 'achm' ),
        'all_items'           => __( 'All Domestics', 'achm' ),
        'view_item'           => __( 'View Domestic', 'achm' ),
        'add_new_item'        => __( 'Add New Domestic', 'achm' ),
        'add_new'             => __( 'Add New', 'achm' ),
        'edit_item'           => __( 'Edit Domestic', 'achm' ),
        'update_item'         => __( 'Update Domestic', 'achm' ),
        'search_items'        => __( 'Search Domestic', 'achm' ),
        'not_found'           => __( 'Not Found', 'achm' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'achm' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'domestics', 'achm' ),
        'description'         => __( 'Domestic news and reviews', 'achm' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor',  'thumbnail',  'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-media-document',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
 
    );
     
    // Registering your Custom Post Type
    register_post_type( 'domestics', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'domestic_post_type', 0 );

//==================================International Course CPT===============================

function international_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Internationals', 'Post Type General Name', 'achm' ),
        'singular_name'       => _x( 'International', 'Post Type Singular Name', 'achm' ),
        'menu_name'           => __( 'International Course', 'achm' ),
        'parent_item_colon'   => __( 'Parent International', 'achm' ),
        'all_items'           => __( 'All Internationals', 'achm' ),
        'view_item'           => __( 'View International', 'achm' ),
        'add_new_item'        => __( 'Add New International', 'achm' ),
        'add_new'             => __( 'Add New', 'achm' ),
        'edit_item'           => __( 'Edit International', 'achm' ),
        'update_item'         => __( 'Update International', 'achm' ),
        'search_items'        => __( 'Search International', 'achm' ),
        'not_found'           => __( 'Not Found', 'achm' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'achm' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'internationals', 'achm' ),
        'description'         => __( 'International news and reviews', 'achm' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor',  'thumbnail',  'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-media-spreadsheet',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
 
    );
     
    // Registering your Custom Post Type
    register_post_type( 'internationals', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'international_post_type', 0 );

//=========================================oba cpt=================================

function oba_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Obas', 'Post Type General Name', 'achm' ),
        'singular_name'       => _x( 'Oba', 'Post Type Singular Name', 'achm' ),
        'menu_name'           => __( 'Oba Course', 'achm' ),
        'parent_item_colon'   => __( 'Parent Oba', 'achm' ),
        'all_items'           => __( 'All Obas', 'achm' ),
        'view_item'           => __( 'View Oba', 'achm' ),
        'add_new_item'        => __( 'Add New Oba', 'achm' ),
        'add_new'             => __( 'Add New', 'achm' ),
        'edit_item'           => __( 'Edit Oba', 'achm' ),
        'update_item'         => __( 'Update Oba', 'achm' ),
        'search_items'        => __( 'Search Oba', 'achm' ),
        'not_found'           => __( 'Not Found', 'achm' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'achm' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'obas', 'achm' ),
        'description'         => __( 'Oba news and reviews', 'achm' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor',  'thumbnail',  'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-media-spreadsheet',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
 
    );
     
    // Registering your Custom Post Type
    register_post_type( 'obas', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'oba_post_type', 0 );



//===========================================custom sidebar==================================

function achm_sidebar(){
    register_sidebar(
        array(
            'name' => 'OBA Sidebar',
            'id'   => 'oba_sidebar',
            'before_widget' => '<div class="widget">',
            'after_widget'  => '</div>',
            'before_title'  => '<h6>',
            'after_title'   => '</h6>',
        )
    );
    register_sidebar(
        array(
            'name' => 'News Sidebar',
            'id'   => 'news_sidebar',
            'before_widget' => '<div class="widget">',
            'after_widget'  => '</div>',
            'before_title'  => '<h6>',
            'after_title'   => '</h6>',
        )
    );

    register_sidebar(
        array(
            'name' => 'Domestic Course Sidebar',
            'id'   => 'domestic_course_sidebar',
            'before_widget' => '<div class="widget">',
            'after_widget'  => '</div>',
            'before_title'  => '<h6>',
            'after_title'   => '</h6>',
        )
    );

    register_sidebar(
        array(
            'name' => 'International Course Sidebar',
            'id'   => 'international_course_sidebar',
            'before_widget' => '<div class="widget">',
            'after_widget'  => '</div>',
            'before_title'  => '<h6>',
            'after_title'   => '</h6>',
        )
    );

    
}



add_action('widgets_init','achm_sidebar');

//============================================google map api =================================

function universityMapKey($api){
    $api['key'] = 'AIzaSyBEsezxR7kg-gYmlPC3Xe4MexSQoYlo1bo';
    return $api;
}
add_filter('acf/fields/google_map/api','universityMapKey');

//=========================================footer part customize==============================

function achm_footer_customize_register($wp_customize){
    //header section

    $wp_customize-> add_section('achm_footer_section', [
        'title' => __('Footer Section', 'achm'),
        'priority' => 30,
    ]);

    
    //About 
    $wp_customize -> add_setting('achm_about_handle',[
        'default' => ''
    ]);
    $wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'achm_about_handle_input', array(
        'label' => __('About', 'achm'),
        'section' => 'achm_footer_section',
        'settings' => 'achm_about_handle',
        'description' => __('please enter your about title'),
        'type'  => 'textarea',
        
    ))); 

    //facebook lik
    $wp_customize -> add_setting('achm_footer_facebook_handle',[
        'default' => ''
    ]);
    $wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'achm_footer_facebook_handle_input', array(
        'label' => __('Facebook Link', 'achm'),
        'section' => 'achm_footer_section',
        'settings' => 'achm_footer_facebook_handle',
        'description' => __('please enter your facebook link'),
        'type'   => 'link',
        
    ))); 

    

    //twitter
     $wp_customize -> add_setting('achm_footer_twitter_handle',[
        'default' => ''
    ]);
    $wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'achm_footer_twitter_handle_input', array(
        'label' => __('Twitter Link', 'achm'),
        'section' => 'achm_footer_section',
        'settings' => 'achm_footer_twitter_handle',
        'description' => __('please enter your Twitter Link'),
        'type'   => 'link',
        
    )));

    //Instagram
     $wp_customize -> add_setting('achm_instagram_handle',[
        'default' => ''
    ]);
    $wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'achm_instagram_handle_input', array(
        'label' => __('Instagram Link', 'achm'),
        'section' => 'achm_footer_section',
        'settings' => 'achm_instagram_handle',
        'description' => __('please enter your Instagram Link'),
        'type'   => 'link',
        
    )));

    //Linkedin
     $wp_customize -> add_setting('achm_footer_linkedin_handle',[
        'default' => ''
    ]);
    $wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'achm_footer_linkedin_handle_input', array(
        'label' => __('Linkedin Link', 'achm'),
        'section' => 'achm_footer_section',
        'settings' => 'achm_footer_linkedin_handle',
        'description' => __('please enter your Linkedin Link'),
        'type'   => 'link',
        
    )));

    //Youtube
     $wp_customize -> add_setting('achm_footer_youtube_handle',[
        'default' => ''
    ]);
    $wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'achm_footer_youtube_handle_input', array(
        'label' => __('Youtube Link', 'achm'),
        'section' => 'achm_footer_section',
        'settings' => 'achm_footer_youtube_handle',
        'description' => __('please enter your Youtube Link'),
        'type'   => 'link',
        
    )));

    //contact
     $wp_customize -> add_setting('achm_footer_phone_handle',[
        'default' => ''
    ]);
    $wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'achm_footer_phone_handle_input', array(
        'label' => __('Phone Number', 'achm'),
        'section' => 'achm_footer_section',
        'settings' => 'achm_footer_phone_handle',
        'description' => __('please enter your Phone Number'),
        'type'   => 'phone',
        
    )));

    //Email
     $wp_customize -> add_setting('achm_footer_email_handle',[
        'default' => ''
    ]);
    $wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'achm_footer_email_handle_input', array(
        'label' => __('Email Address', 'achm'),
        'section' => 'achm_footer_section',
        'settings' => 'achm_footer_email_handle',
        'description' => __('please enter your Email Address'),
        'type'   => 'email',
        
    )));

    //Location
     $wp_customize -> add_setting('achm_footer_location_handle',[
        'default' => ''
    ]);
    $wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'achm_footer_location_handle_input', array(
        'label' => __('Location', 'achm'),
        'section' => 'achm_footer_section',
        'settings' => 'achm_footer_location_handle',
        'description' => __('please enter your Location'),
        'type'   => 'textarea',
        
    )));

    //Copyright
     $wp_customize -> add_setting('achm_footer_copyright_handle',[
        'default' => ''
    ]);
    $wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'achm_footer_copyright_handle_input', array(
        'label' => __('Copyright', 'achm'),
        'section' => 'achm_footer_section',
        'settings' => 'achm_footer_copyright_handle',
        'description' => __('please enter Copyright'),
        'type'   => 'textarea',
        
    )));

     //Footer Logo
    $wp_customize -> add_setting('achm_img_handle',[
        'transport' => 'refresh',
        'height' => 320
    ]);
    $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize,'achm_img_handle_input', array(
        'label' => __('Footer Logo', 'achm'),
        'section' => 'achm_footer_section',
        'settings' => 'achm_img_handle',
        
    )));
}
add_action('customize_register', 'achm_footer_customize_register');

//================================comment count number====================================
function wpb_comment_count() { 
$comments_count = wp_count_comments();
$message =  'Total <strong>'.  $comments_count->approved . '</strong> comments.';
 
return $message; 
} 
 
add_shortcode('wpb_total_comments','wpb_comment_count');