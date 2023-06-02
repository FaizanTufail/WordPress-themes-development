<?php
get_header();
?>
<?php /* Template Name: contact */ ?>
<!-- Start Page Title Area -->
<div class="page-title-area item-bg-5">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-title-content">
                            <h2>Contact</h2>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->
        
        <!-- Start Contact Box Area -->
		<section class="contact-box pt-100 pb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="single-contact-box">
                        <?php
    echo get_post_meta($post->ID, 'Icon-1', true);
  ?>
							<div class="content-title">
                            <?php
    echo get_post_meta($post->ID, 'Icon-Title-1', true);
  ?>
							</div>
						</div>
                    </div>
                    
					<div class="col-lg-4 col-md-6">
						<div class="single-contact-box">
                        <?php
    echo get_post_meta($post->ID, 'Icon-2', true);
  ?>
							<div class="content-title">
                            <?php
    echo get_post_meta($post->ID, 'Icon-Title-2', true);
  ?>
							</div>
						</div>
                    </div>
                    
					<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
						<div class="single-contact-box">
                        <?php
    echo get_post_meta($post->ID, 'Icon-3', true);
  ?>
							<div class="content-title">
                            <?php
    echo get_post_meta($post->ID, 'Icon-Title-3', true);
  ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact Box Area -->

        <!-- Start Contact Area -->
        <section class="contact-section pb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="contact-text">
                            <h3><?php
    echo get_post_meta($post->ID, 'Form-Heading', true);
  ?></h3>
                            <p><?php
    echo get_post_meta($post->ID, 'Form-Description', true);
  ?></p>
                        </div>

                        <div class="contact-form">
                        <?php
while (have_posts()) {
    the_post();
    // Display the page/post content
    

    // Retrieve the value of the "form_shortcode" custom field
    $form_shortcode = get_post_meta(get_the_ID(), 'form_shortcode', true);

    // Display the form using the shortcode
    echo do_shortcode($form_shortcode);
}
?>
                        
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="contact-image">
                             <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- End Contact Area -->
<?php
get_footer();
?>
