<?php /* Template Name: services */ ?>
<?php
get_header();
?>
<!-- Sidebar Modal -->
<div class="sidebar-modal">
            <div class="sidebar-modal-inner">
                <div class="sidebar-about-area">
                    <div class="title">
                        <h2>About Us</h2>
                        <p>We believe brand interaction is key in communication. Real innovations and a positive customer experience are the heart of successful communication. No fake products and services. The customer is king, their lives and needs are the inspiration.</p>
                    </div>
                </div>

                <div class="sidebar-contact-feed">
                    <h2>Contact</h2>
                    <div class="contact-form">
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Your Phone">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Your Subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="6" required data-error="Write your message" placeholder="Your Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="send-btn">
                                        <button type="submit" class="send-btn-one">
                                            Send Message
                                        </button>

                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="sidebar-contact-area">
                    <div class="contact-info">
                        <div class="contact-info-content">
                            <h2>
                                <a href="tel:+0881306298615">
                                    +088 130 629 8615
                                </a>
                                <span>OR</span>
                                <a href="mailto:fria@gmail.com">
                                    fria@gmail.com
                                </a>
                            </h2>
    
                            <ul class="social">
                                <li>
                                    <a href="#" target="_blank">
                                    <i class="fa-brands fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                    <i class="fa-brands fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                    <i class="fa-brands fa-wordpress"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                    <i class="fa-brands fa-youtube"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <span class="close-btn sidebar-modal-close-btn">
                    <i class="flaticon-cancel"></i>
                </span>
            </div>
        </div>
        <!-- End Sidebar Modal -->
        <!-- Start Page Title Area -->
        <div class="page-title-area item-bg-1">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-title-content">
                            <h2><?php echo get_theme_mod('page_title'); ?></h2>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>Services One</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Services Area -->
        <section class="services-section pt-100 pb-100">
            <div class="container">
                <div class="section-title">
                    <h2>IT  Agency Services</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidiunt  labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                    <div class="bar"></div>
                </div>

                <div class="row">

                <?php
$services_query = new WP_Query(array(
    'post_type' => 'service',
    'posts_per_page' => 3,
    'paged' => $paged
));

if ($services_query->have_posts()) {
    while ($services_query->have_posts()) {
        $services_query->the_post();
        ?>
        <div class="col-lg-4 col-md-6">
            <div class="single-services">
                <div class="icon">
                    <?php echo get_post_meta($post->ID, 'icon', true); ?>
                </div>
                <a href="<?php the_permalink(); ?>">
                    <h3><?php the_title(); ?></h3>
                    <p><?php the_content(); ?></p>
                </a>
            </div>
        </div>
        <?php
    }
     // Pagination
     $total_pages = $services_query->max_num_pages;
     if ($total_pages > 1) {
         $current_page = max(1, get_query_var('paged'));
 
         echo '<div class="col-lg-12 col-md-12">';
         echo '<div class="pagination-area">';
         echo paginate_links(array(
             'base' => get_pagenum_link(1) . '%_%',
             'format' => '/page/%#%',
             'current' => $current_page,
             'total' => $total_pages,
             'prev_text' => '<i class="fa-solid fa-left-long"></i>',
             'next_text' => '<i class="fa-solid fa-right-long"></i>',
             'mid_size' => 2, // Adjust the number of pagination links shown before and after the current page number
         ));
         echo '</div>';
         echo '</div>';
     }
} else {
    echo 'No services found.';
}

wp_reset_postdata();
?>


                    

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
        <!-- End Services Area -->
<?php
get_footer();
?>
