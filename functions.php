<?php function mytheme_setup() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'mytheme_setup' );
?>
<?php
register_nav_menus(

array ('fria-menu' =>'fria-menu')

);
?>
<?php
add_theme_support( 'post-thumbnails' );
?>
<?php
function add_Services_class_to_menu_link($atts, $item, $args, $depth) {
    $atts['class'] = 'nav-link';
    return $atts;
}

add_filter('nav_menu_link_attributes', 'add_Services_class_to_menu_link', 10, 4);

function add_Services_class_to_menu_items($items, $args) {
    $items = preg_replace('/<a/', '<a class="nav-link"', $items);
    return $items;
}

add_filter('wp_nav_menu_items', 'add_Services_class_to_menu_items', 10, 2);

function add_Services_class_to_submenu_ul($submenu, $args) {
    $submenu = preg_replace('/<ul class="sub-menu/', '<ul class="dropdown-menu"', $submenu);
    return $submenu;
}

add_filter('wp_nav_menu', 'add_Services_class_to_submenu_ul', 10, 2);
?>
<?php
add_action('Servicesize_register', 'my_Servicesizer_options');

function my_Servicesizer_options($wp_Servicesize) {
    // Add a new Services setting
    $wp_Servicesize->add_setting('page_title', array(
        'default' => 'Services',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // Add a new Services control to the Site Identity section
    $wp_Servicesize->add_control('page_title', array(
        'type' => 'text',
        'section' => 'title_tagline',
        'label' => __('Page Title', 'fria-theme'),
    ));
}
?>
 <?php 
 
    register_sidebar( array(
        'name'          =>'footer1',
        'id'            => 'sidebar-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>'
    ) );
?>
<?php

register_sidebar( array(
    'name'          =>'footer2',
    'id'            => 'sidebar-2',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>'
) );
?>

<?php
function custom_product_post_type() {
    $labels = array(
        'name'               => 'Products',
        'singular_name'      => 'Product',
        'menu_name'          => 'Products',
        'name_admin_bar'     => 'Product',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Product',
        'new_item'           => 'New Product',
        'edit_item'          => 'Edit Product',
        'view_item'          => 'View Product',
        'all_items'          => 'All Products',
        'search_items'       => 'Search Products',
        'parent_item_colon'  => 'Parent Products:',
        'not_found'          => 'No products found.',
        'not_found_in_trash' => 'No products found in Trash.'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'products' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' )
    );

    register_post_type( 'product', $args );
}
add_action( 'init', 'custom_product_post_type' );

function enable_custom_fields_for_custom_product_post_type() {
    add_post_type_support( 'product', 'custom-fields' );
}
add_action( 'init', 'enable_custom_fields_for_custom_product_post_type' );
?>


<?php
function custom_service_post_type() {
    $labels = array(
        'name'               => 'Services',
        'singular_name'      => 'Service',
        'menu_name'          => 'Services',
        'name_admin_bar'     => 'Service',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Service',
        'new_item'           => 'New Service',
        'edit_item'          => 'Edit Service',
        'view_item'          => 'View Service',
        'all_items'          => 'All Services',
        'search_items'       => 'Search Services',
        'parent_item_colon'  => 'Parent Services:',
        'not_found'          => 'No services found.',
        'not_found_in_trash' => 'No services found in Trash.'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'service' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' )
    );

    register_post_type( 'service', $args );
}
add_action( 'init', 'custom_service_post_type' );
function enable_custom_fields_for_custom_service_post_type() {
    add_post_type_support( 'service', 'custom-fields' );
}
add_action( 'init', 'enable_custom_fields_for_custom_service_post_type' );

// Add custom meta box for image field
// Add custom meta box for image fields
function add_custom_service_meta_box() {
    add_meta_box(
        'service_image_meta_box',
        'Service Images',
        'render_service_image_meta_box',
        'service',
        'normal',
        'default'
    );
}
add_action( 'add_meta_boxes', 'add_custom_service_meta_box' );

// Render the custom meta box
function render_service_image_meta_box( $post ) {
    // Retrieve the current values of the image fields
    $image_url1 = get_post_meta( $post->ID, 'service_image', true );
    $image_url2 = get_post_meta( $post->ID, 'service_image2', true );
    $image_url3 = get_post_meta( $post->ID, 'service_image3', true );
    $video_id = get_post_meta( $post->ID, 'service_video', true );
    $rich_text = get_post_meta( $post->ID, 'service_rich_text', true );
    $rich_text2 = get_post_meta( $post->ID, 'service_rich_text2', true );
    $rich_text3 = get_post_meta( $post->ID, 'service_rich_text3', true );
    

    // Output the image field inputs and media uploader buttons
    ?>
    <label for="service-image1">Service Image 1</label>
    <input type="text" name="service_image" id="service-image1" value="<?php echo esc_attr( $image_url1 ); ?>" />
    <input type="button" class="button button-primary" id="service-image-button1" value="Select Image" />

    <br><br>

    <label for="service-image2">Service Image 2</label>
    <input type="text" name="service_image2" id="service-image2" value="<?php echo esc_attr( $image_url2 ); ?>" />
    <input type="button" class="button button-primary" id="service-image-button2" value="Select Image" />

    <br><br>

    <label for="service-image3">Service Image 3</label>
    <input type="text" name="service_image3" id="service-image3" value="<?php echo esc_attr( $image_url3 ); ?>" />
    <input type="button" class="button button-primary" id="service-image-button3" value="Select Image" />
<br><br>
    <label for="service-video">Service Video</label>
    <input type="text" name="service_video" id="service-video" value="<?php echo esc_attr( $video_id ); ?>" />
    <button type="button" class="button button-primary" id="service-video-button">Select Video</button>
    <span id="service-video-name"></span>

    <br><br>

    <label for="service-rich-text">Service Rich Text</label>
    <label for="service-rich-text2">Service Rich Text</label>
    <label for="service-rich-text3">Service Rich Text</label>
    <?php wp_editor( $rich_text, 'service-rich-text', array( 'textarea_name' => 'service_rich_text' ) ); ?>
    <?php wp_editor( $rich_text2, 'service-rich-text2', array( 'textarea_name' => 'service_rich_text2' ) ); ?>
    <?php wp_editor( $rich_text3, 'service-rich-text3', array( 'textarea_name' => 'service_rich_text3' ) ); ?>
    <script>
    jQuery(document).ready(function($) {
        // Handle the media uploader button click events
        $('#service-image-button1, #service-image-button2, #service-image-button3').click(function(e) {
            e.preventDefault();

            // Get the target input field ID
            var targetInput = $(this).prev();

            // Create the media frame
            var frame = wp.media({
                title: 'Select Image',
                button: {
                    text: 'Use Image'
                },
                multiple: false
            });

            // When an image is selected, run a callback
            frame.on('select', function() {
                var attachment = frame.state().get('selection').first().toJSON();
                targetInput.val(attachment.url);
            });
            
            // Open the media uploader
            frame.open();
        });
    });
    </script>
     <script>
    jQuery(document).ready(function($) {
        // Handle the media uploader button click event
        $('#service-image-button1, #service-image-button2').click(function(e) {
            // ...
        });

        // Handle the video selection button click event
        $('#service-video-button').click(function(e) {
            e.preventDefault();

            // Create the media frame
            var frame = wp.media({
                title: 'Select Video',
                button: {
                    text: 'Use Video'
                },
                multiple: false,
                library: {
                    type: 'video'
                }
            });

            // When a video is selected, run a callback
            frame.on('select', function() {
                var attachment = frame.state().get('selection').first().toJSON();
                $('#service-video').val(attachment.id);
                $('#service-video-name').text(attachment.filename);
            });

            // Open the media uploader
            frame.open();
        });
    });
    </script>
    
    <?php
}

// Save the custom meta box data
function save_custom_service_meta( $post_id ) {
    if ( isset( $_POST['service_image'] ) ) {
        $image_url = sanitize_text_field( $_POST['service_image'] );
        update_post_meta( $post_id, 'service_image', $image_url );
    }

    if ( isset( $_POST['service_image2'] ) ) {
        $image_url2 = sanitize_text_field( $_POST['service_image2'] );
        update_post_meta( $post_id, 'service_image2', $image_url2 );
    }
    if ( isset( $_POST['service_image3'] ) ) {
        $image_url3 = sanitize_text_field( $_POST['service_image3'] );
        update_post_meta( $post_id, 'service_image3', $image_url3 );
    }
    if ( isset( $_POST['service_video'] ) ) {
        $video_id = sanitize_text_field( $_POST['service_video'] );
        update_post_meta( $post_id, 'service_video', $video_id );
    }


    if ( isset( $_POST['service_rich_text'] ) ) {
        $rich_text = wp_kses_post( $_POST['service_rich_text'] );
        update_post_meta( $post_id, 'service_rich_text', $rich_text );
    }
    if ( isset( $_POST['service_rich_text2'] ) ) {
        $rich_text2 = wp_kses_post( $_POST['service_rich_text2'] );
        update_post_meta( $post_id, 'service_rich_text2', $rich_text2 );
    }
    if ( isset( $_POST['service_rich_text3'] ) ) {
        $rich_text3 = wp_kses_post( $_POST['service_rich_text3'] );
        update_post_meta( $post_id, 'service_rich_text3', $rich_text3 );
    }
}
add_action( 'save_post', 'save_custom_service_meta' );

