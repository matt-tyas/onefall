<!-- hero search -->
<section class="of-hero" style="background-image:url('<?php the_field('hero_image', 'option'); ?>');">
    <div class="wrap">
        <h1 class="of-hero__title"><?php the_field('hero_title', 'option'); ?></h1>
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
