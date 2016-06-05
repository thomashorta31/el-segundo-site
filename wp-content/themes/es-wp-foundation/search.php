<?php
/*
Template Name: Search Page
*/
?>

<?php get_header(); ?>

        <div class="row">
            <div class="medium-12 columns">
                <h2>Search Results</h2>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                <?php endwhile; else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>
            </div>
        </div>



    <?php get_footer(); ?>

