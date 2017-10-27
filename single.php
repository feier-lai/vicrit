<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>



                <!-- Page Content -->
    <div class="container">

        <div class="row">

            <?php if(has_term('research', 'category', $post)) : ?>

                <div class="col-lg-12">
                    <h1><?php the_title(); ?></h1>
                    <hr>
                    <?php if(has_post_thumbnail())  : ?>
                        <?php $feature_thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id()); ?>
                        <img class="img-responsive" src="<?php echo $feature_thumbnail_url; ?>" alt="research-images">                      
                    <?php endif; ?>
                    <hr>
                    <p>
                        <?php while(have_posts()) : the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile; ?>             
                    </p>             
                </div>

            <?php elseif(has_term('institutes', 'category', $post)) : ?>

                <div class="col-lg-12">
                    <h1><?php the_title(); ?></h1>
                    <hr>
                    <?php if(has_post_thumbnail())  : ?>
                        <?php $feature_thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id()); ?>
                        <img class="img-responsive" src="<?php echo $feature_thumbnail_url; ?>" alt="research-images">                      
                    <?php endif; ?>
                    <hr>
                    <p>
                        <?php while(have_posts()) : the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile; ?>             
                    </p>             
                </div>

            <?php endif; ?>

            
          

        </div>
       </div>

        <hr>

			

<?php get_footer();
