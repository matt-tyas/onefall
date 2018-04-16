<?php get_header(); ?>
<main id="main" class="main">
	<div class="wrap">
	    <div class="row">
	        <div class="large-9 small-12 column">
	            <section class="of-page">
			        <h1><?php _e( 'Archives', 'html5blank' ); ?></h1>
			        <?php get_template_part('loop'); ?>
			        <?php get_template_part('pagination'); ?>
                </section>
            </div>
            <div class="large-3 small-12 column">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
