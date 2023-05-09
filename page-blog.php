<?php
get_header();
?>
<?php /* Template Name: blog */ ?>
<!-- Start Page Title Area -->
<div class="page-title-area item-bg-1">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-title-content">
                            <h2>Blog</h2>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>Blog One</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Blog Area -->
        <section class="blog-section pt-100 pb-100">
            <div class="container">
                <div class="section-title">
                    <h2>Our <span>Latest</span> News</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidiunt labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                    <div class="bar"></div>
                </div>

                <div class="row">
                <?php

$args = array(
    'post_type' => 'post',
    'posts_per_page' => 10,
);


$custom_query = new WP_Query( $args );


if ( $custom_query->have_posts() ) :

    
    while ( $custom_query->have_posts() ) :
        $custom_query->the_post(); ?>

        <div class="col-lg-4 col-md-6">
            <div class="single-blog">
                <div class="image">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                            <?php the_post_thumbnail(); ?>
                        </a>
                    <?php endif; ?>
                </div>

                <div class="content">
                    <span><?php the_time('F jS, Y'); ?></span>
                    <span>by <?php the_author_posts_link(); ?></span>
                    <h3>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h3>
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
                </div>
            </div>
        </div>

    <?php endwhile;

    // Reset the post data
    wp_reset_postdata();

else :
    // If no posts found, output a message
    echo '<p>No posts found</p>';
endif;
?>

                </div>
            </div>
        </section>
        <!-- End Blog Area -->
<?php
get_footer();
?>