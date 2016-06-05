<?php
/*
Template Name: Search Page
*/
?>
<?php get_header(); ?>
    <div class="callout large">
        <div class="row column text-center">
            <h1>Search Results</h1>
        </div>
    </div>
    <div class="row text-center">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
        <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
    </div>
<?php get_footer(); ?>

