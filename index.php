<?php get_header(); ?>
<!-- hero search -->
<section class="of-hero">
    <div class="wrap">
        <h1 class="of-hero__title"><label for="search">Find Professional Wrestling in your&nbsp;area</label></h1>
        <div class="row">
            <form>
                <div class="large-9 small-12 column">
                    <input type="search" id="search" placeholder="Search for a postcode or place name" class="of-text of-hero__search">
                </div>
                <div class="large-3 small-12 column">
                    <button class="of-btn of-btn--large">Search</button>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- /hero-search -->
<main id="main" class="main">
	<div class="wrap">
	    <div class="row">
	        <div class="large-9 small-12 column">
	            <section class="of-page">
					<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>
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
