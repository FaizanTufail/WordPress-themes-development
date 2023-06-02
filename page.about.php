<?php
get_header();
?>
<?php /* Template Name: about */ ?>
        <!-- Start Page Title Area -->
        <div class="page-title-area item-bg-1">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-title-content">
                            <h2>About</h2>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>About</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start About Area -->
        <section class="about-section ptb-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 p-0">
                        <div class="about-image">
                        <?php
// Get the post ID
$post_id = get_the_ID();

// Retrieve the image URL from the custom field
$image_url = get_post_meta($post_id, 'about_image', true);

// Display the image
if ($image_url) {
    echo '<img src="' . esc_url($image_url) . '" alt="About Image">';
}
?>
                        </div>
                    </div>

                    <div class="col-lg-6">
						<div class="about-tab">
                            <h2><?php
    echo get_post_meta($post->ID, 'Main-Heading-About', true);
  ?></h2>
                            <div class="bar"></div>
                            <p><?php
    echo get_post_meta($post->ID, 'Description', true);
  ?><</p>
							<div class="tab about-list-tab">
								<ul class="tabs">
									<li>
										<a href="#">
                                        <?php
    echo get_post_meta($post->ID, 'Tab-Text-1', true);
  ?>
										</a>
									</li>
									<li>
										<a href="#">
                                        <?php
    echo get_post_meta($post->ID, 'Tab-Text-2', true);
  ?>
										</a>
									</li>
									<li>
										<a href="#">
                                        <?php
    echo get_post_meta($post->ID, 'Tab-Text-3', true);
  ?>
										</a>
									</li>
                                </ul>
                                
								<div class="tab_content">
									<div class="tabs_item">
										<div class="text">
                                        <?php
// Get the rich text content
$rich_text_content = get_post_meta( get_the_ID(), 'rich_text', true );

// Output the rich text content
echo wpautop( $rich_text_content );
?>
                                        </div>

                                        
                                    </div>

                                    <div class="tabs_item">
										<div class="text">
                                        <?php
// Get the rich text content
$rich_text_content = get_post_meta( get_the_ID(), 'rich_text', true );

// Output the rich text content
echo wpautop( $rich_text_content );
?>
                                        </div>

                                        
                                    </div>

                                    <div class="tabs_item">
										<div class="text">
                                        <?php
// Get the rich text content
$rich_text_content = get_post_meta( get_the_ID(), 'rich_text', true );

// Output the rich text content
echo wpautop( $rich_text_content );
?>
                                        </div>

                                        
                                    </div>
								</div>
							</div>
						</div>
					</div>
                </div>
            </div>
        </section>
        <!-- End About Area -->
        
        <!-- Start Team Area -->
        <section class="team-section pb-70">
            <div class="container">
                <div class="section-title">
                    <h2><?php
    echo get_post_meta($post->ID, 'Heading-2', true);
  ?></h2>
                    <p><?php
    echo get_post_meta($post->ID, 'Description-2', true);
  ?></p>
                    <div class="bar"></div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="team-item">
                            <div class="image">
                                <?php
// Get the post ID
$post_id = get_the_ID();

// Retrieve the image URL from the custom field
$image_url = get_post_meta($post_id, 'about_image3', true);

// Display the image
if ($image_url) {
    echo '<img src="' . esc_url($image_url) . '" alt="About Image">';
}
?>
    
                                <ul class="social">
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="bx bxl-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="bx bxl-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="bx bxl-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="bx bxl-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
    
                            <div class="content">
                                <?php
    echo get_post_meta($post->ID, 'Image-Text', true);
  ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="team-item">
                            <div class="image">
                                <?php
// Get the post ID
$post_id = get_the_ID();

// Retrieve the image URL from the custom field
$image_url = get_post_meta($post_id, 'about_image3', true);

// Display the image
if ($image_url) {
    echo '<img src="' . esc_url($image_url) . '" alt="About Image">';
}
?>
    
                                <ul class="social">
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="bx bxl-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="bx bxl-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="bx bxl-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="bx bxl-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
    
                            <div class="content">
                            <?php
    echo get_post_meta($post->ID, 'Image-Text2', true);
  ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3">
                        <div class="team-item">
                            <div class="image">
                               <?php
// Get the post ID
$post_id = get_the_ID();

// Retrieve the image URL from the custom field
$image_url = get_post_meta($post_id, 'about_image3', true);

// Display the image
if ($image_url) {
    echo '<img src="' . esc_url($image_url) . '" alt="About Image">';
}
?>
    
                                <ul class="social">
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="bx bxl-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="bx bxl-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="bx bxl-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="bx bxl-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
    
                            <div class="content">
                            <?php
    echo get_post_meta($post->ID, 'Image-Text3', true);
  ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="default-shape">
                <div class="shape-1">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/4.png" alt="image">
                </div>

                <div class="shape-2 rotateme">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/5.svg" alt="image">
                </div>

                <div class="shape-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/6.svg" alt="image">
                </div>

                <div class="shape-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/7.png" alt="image">
                </div>

                <div class="shape-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/8.png" alt="image">
                </div>
            </div>
        </section>
        <!-- End Team Area -->

        <!-- Start Faq Area -->
        <section class="faq-section pb-100">
            <div class="container">
                <div class="section-title">
                <h2><?php
    echo get_post_meta($post->ID, 'Heading-3', true);
  ?></h2>
                    <p><?php
    echo get_post_meta($post->ID, 'Description-3', true);
  ?></p><div class="bar">

  </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="faq-accordion">
                            <ul class="accordion">
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='bx bx-chevron-down'></i>
                                        <?php
    echo get_post_meta($post->ID, 'faq-question-1', true);
  ?>
                                    </a>
                            
                                    <div class="accordion-content show">
                                        <p><?php
    echo get_post_meta($post->ID, 'faq-answer-1', true);
  ?></p> </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='bx bx-chevron-down'></i>
                                        <?php
    echo get_post_meta($post->ID, 'faq-question-1', true);
  ?>
                                    </a>
                            
                                    <div class="accordion-content show">
                                        <p><?php
    echo get_post_meta($post->ID, 'faq-answer-1', true);
  ?></p> </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='bx bx-chevron-down'></i>
                                        <?php
    echo get_post_meta($post->ID, 'faq-question-1', true);
  ?>
                                    </a>
                            
                                    <div class="accordion-content show">
                                        <p><?php
    echo get_post_meta($post->ID, 'faq-answer-1', true);
  ?></p> </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='bx bx-chevron-down'></i>
                                        <?php
    echo get_post_meta($post->ID, 'faq-question-1', true);
  ?>
                                    </a>
                            
                                    <div class="accordion-content show">
                                        <p><?php
    echo get_post_meta($post->ID, 'faq-answer-1', true);
  ?></p> </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='bx bx-chevron-down'></i>
                                        <?php
    echo get_post_meta($post->ID, 'faq-question-1', true);
  ?>
                                    </a>
                            
                                    <div class="accordion-content show">
                                        <p><?php
    echo get_post_meta($post->ID, 'faq-answer-1', true);
  ?></p> </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="faq-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/faq.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Faq Area -->

        <!-- Start Clients Area -->
        <section class="clients-section pb-100">
            <div class="container">
                <div class="section-title">
                <h2><?php
    echo get_post_meta($post->ID, 'Heading-4', true);
  ?></h2>
                    <p><?php
    echo get_post_meta($post->ID, 'Description-4', true);
  ?></p>
  <div class="bar"></div>
                </div>

                <div class="clients-slider owl-carousel owl-theme">
                    <div class="clients-item">
                        <div class="icon">
                            <i class="flaticon-left-quotes-sign"></i>
                        </div>

                        <?php
// Get the rich text content
$rich_text_content = get_post_meta( get_the_ID(), 'rich_text2', true );

// Output the rich text content
echo wpautop( $rich_text_content );
?>

                        <div class="clients-content">
                        <?php
// Get the rich text content
$rich_text_content = get_post_meta( get_the_ID(), 'rich_text3', true );

// Output the rich text content
echo wpautop( $rich_text_content );
?>

                        </div>
                    </div>

                    <div class="clients-item">
                        <div class="icon">
                            <i class="flaticon-left-quotes-sign"></i>
                        </div>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</p>

                        <div class="clients-content">
                            <h3>Alex Maxwel</h3>
                            <span>Agent Management</span>
                        </div>
                    </div>

                    <div class="clients-item">
                        <div class="icon">
                            <i class="flaticon-left-quotes-sign"></i>
                        </div>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</p>

                        <div class="clients-content">
                            <h3>Edmond Halley</h3>
                            <span>Web Designer</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Clients Area -->
<?php
get_footer();
?>
