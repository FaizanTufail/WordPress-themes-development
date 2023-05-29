<?php
get_header(); ?>

<
        <?php
        while (have_posts()) {
            the_post();
            ?>
            
<!-- Start Page Title Area -->
<div class="page-title-area item-bg-4">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-title-content">
                            <h2>Services</h2>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>Single Services</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Services Details Area -->
        <section class="services-details-area ptb-100">
            <div class="container">
                <div class="services-details-video">
                    <div class="details-image">
                    <?php
// Get the post ID
$post_id = get_the_ID();

// Retrieve the image URL from the custom field
$image_url = get_post_meta($post_id, 'service_image', true);

// Display the image
if ($image_url) {
    echo '<img src="' . esc_url($image_url) . '" alt="Service Image">';
}
?>
                    </div>

                    <div class="details-video">
                    <!-- <?php
// // Get the video ID
// $video_id = get_post_meta( get_the_ID(), 'service_video', true );

// // Check if a video is selected
// if ( $video_id ) {
//     // Get the video URL
//     $video_url = wp_get_attachment_url( $video_id );

//     // Output the video player
//     echo wp_video_shortcode( array(
//         'src' => $video_url,
//         'width' => '640',
//         'height' => '360'
//     ) );
// }
?> -->
                        <a href=" <?php
    echo get_post_meta($post->ID, 'main_video_url', true);
  ?>" class="video-btn popup-youtube">
                            <i class="bx bx-play"></i>
                        </a>
                       
                    </div>

                    <div class="text">
                    <?php
// Get the rich text content
$rich_text_content = get_post_meta( get_the_ID(), 'service_rich_text', true );

// Output the rich text content
echo wpautop( $rich_text_content );
?>
</div>
                </div>

                <div class="services-details-overview">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <div class="services-details-desc">
                            <?php
// Get the rich text content
$rich_text_content2 = get_post_meta( get_the_ID(), 'service_rich_text2', true );

// Output the rich text content
echo wpautop( $rich_text_content2 );
?>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <div class="services-details-image">
                            <?php
// Get the post ID
$post_id = get_the_ID();

// Retrieve the image URL from the custom field
$image_url = get_post_meta($post_id, 'service_image2', true);

// Display the image
if ($image_url) {
    echo '<img src="' . esc_url($image_url) . '" alt="Service Image">';
}
?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="services-details-overview">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <div class="services-details-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/services-details/2.jpg" alt="image">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <div class="services-details-desc">
                            <?php
// Get the rich text content
$rich_text_content3 = get_post_meta( get_the_ID(), 'service_rich_text3', true );

// Output the rich text content
echo wpautop( $rich_text_content3 );
?>
                                <div class="services-details-accordion">
                                    <ul class="accordion">
                                        <li class="accordion-item">
                                            <a class="accordion-title active" href="javascript:void(0)">
                                                <i class="bx bx-plus"></i>
                                                <?php
    echo get_post_meta($post->ID, 'faq-question-1', true);
  ?>
                                            </a>

                                            <p class="accordion-content show"><?php
    echo get_post_meta($post->ID, 'faq-answer-1', true);
  ?></p>
                                        </li>
                                        
                                        <li class="accordion-item">
                                            <a class="accordion-title" href="javascript:void(0)">
                                                <i class="bx bx-plus"></i>
                                                <?php
    echo get_post_meta($post->ID, 'faq-question-2', true);
  ?>
                                            </a>

                                            <p class="accordion-content"><?php
    echo get_post_meta($post->ID, 'faq-answer-2', true);
  ?></p>
                                        </li>

                                        <li class="accordion-item">
                                            <a class="accordion-title" href="javascript:void(0)">
                                                <i class="bx bx-plus"></i>
                                               <?php
    echo get_post_meta($post->ID, 'faq-question-3', true);
  ?>
                                            </a>

                                            <p class="accordion-content"><?php
    echo get_post_meta($post->ID, 'faq-answer-3', true);
  ?></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
        </section>
        <!-- End Services Details Area -->
        <?php
        }
        ?>
<?php get_footer(); ?>
