 <?php
  //Template Name: Research Page
  get_header();
?>

 <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Research</h1>
            </div>

            <!-- display all posts from the research category -->
			<?php query_posts('cat=3'); ?>

			<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>

					<div class="col-lg-3 col-md-4 col-xs-6 thumb">
                		<a class="thumbnail" href="<?php the_permalink(); ?>">
                			<?php if(has_post_thumbnail())	: ?>
                				<?php $feature_thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id()); ?>
                				<img class="img-responsive" src="<?php echo $feature_thumbnail_url; ?>" alt="research-images">               		
                			<?php endif; ?>                 		
                    		<p><?php the_title(); ?></p>
                		</a>               
            		</div>
				<?php endwhile; ?>
			<?php endif; ?>

			<?php wp_reset_query(); ?>
            
            
        </div>
    </div>

<?php get_footer(); ?>

    