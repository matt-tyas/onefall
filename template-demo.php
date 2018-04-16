<?php /* Template Name: Demo Page Template */ get_header(); ?>
<main id="main" class="main">
	<div class="wrap">
	    <div class="row">
	        <div class="large-9 small-12 column">
    	        <section class="of-page">

        			<h1><?php the_title(); ?></h1>

        		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

        			<!-- article -->
        			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        				<?php the_content(); ?>

        				<?php comments_template( '', true ); // Remove if you don't want comments ?>

        				<br class="clear">

        				<?php edit_post_link(); ?>

        			</article>
        			<!-- /article -->

        		<?php endwhile; ?>

        		<?php else: ?>

        			<!-- article -->
        			<article>

        				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

        			</article>
        			<!-- /article -->

        		<?php endif; ?>

                </section>
            </div>
            <div class="large-3 small-12 column">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
