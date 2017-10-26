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

            <div class="col-lg-12">

                <!-- display all posts from the research category -->
                <?php query_posts('category_name=research'); ?>

            	<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>

                		<h1><?php the_title(); ?></h1>

                		<hr>
                
                		<?php if(has_post_thumbnail())	: ?>
                			<?php $feature_thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id()); ?>
                				<img class="img-responsive" src="<?php echo $feature_thumbnail_url; ?>" alt="research-images">               		
                		<?php endif; ?>

                		<hr>

                		<p class="lead"><?php the_content(); ?></p>

                	<?php endwhile; ?>
			    <?php endif; ?>

                <?php wp_reset_query(); ?>

                <!-- display all posts from the institutes category -->
                <?php query_posts('cat=4'); ?>

                <?php if(have_posts()) : ?>
                    <?php while(have_posts()) : the_post(); ?>

                        <h1><?php the_title(); ?></h1>

                        <hr>
                
                        <?php if(has_post_thumbnail())  : ?>
                            <?php $feature_thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id()); ?>
                                <img class="img-responsive" src="<?php echo $feature_thumbnail_url; ?>" alt="research-images">                      
                        <?php endif; ?>

                        <hr>

                        <p class="lead"><?php the_content(); ?></p>

                    <?php endwhile; ?>
                <?php endif; ?>

                <?php wp_reset_query(); ?>


      
             

            </div>

        </div>
       </div>

        <hr>
			

<?php get_footer();
