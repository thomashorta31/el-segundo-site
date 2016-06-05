<?php
/*
Template Name: Search Page
*/
?>
<?php
global $query_string;

$query_args = explode("&", $query_string);
$search_query = array();

if( strlen($query_string) > 0 ) {
    foreach($query_args as $key => $string) {
        $query_split = explode("=", $string);
        $search_query[$query_split[0]] = urldecode($query_split[1]);
    } // foreach
} //if

$search = new WP_Query($search_query);
?>
<?php get_header(); ?>

        <div class="callout large">
            <div class="row column text-center">
                <h1>Default Sample Page id 90</h1>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.</p>
                <?php get_search_form(); ?>

                <a href="#" class="button large hollow">Learn More</a>
            </div>
        </div>
        <div class="row">

            <div class="medium-6 columns medium-pull-6">
                <h2>Search Results:</h2>
                <?php if ( $search>have_posts() ) : ?>

                    <!-- pagination here -->

                    <!-- the loop -->
                    <?php while ( $search>have_posts() ) : $search>the_post(); ?>
                        <h2><?php the_title(); ?></h2>
                    <?php endwhile; ?>
                    <!-- end of the loop -->

                    <!-- pagination here -->

                    <?php wp_reset_postdata(); ?>

                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>
            </div>
        </div>
        <hr>


    <?php get_footer(); ?>
