<!-- <form role="search" method="get" class="searchform group" action="<?=esc_url( home_url( '/' ) )?>">
 <label>
 <span class="offscreen"><?php echo _x( 'Search for:', 'label' ) ?></span>
 <input type="search" class="search-field"
 placeholder="<?php echo esc_attr_x( 'Search', 'placeholder' ) ?>"
 value="<?php echo get_search_query() ?>" name="s"
 title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
 </label>
 <input type="submit" alt="Submit search query" value="submit">
</form> -->

<?php
/**
 * default search form
 */
?>
<!-- <form role="search" method="get" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="search-wrap">
        <label class="screen-reader-text" for="s"><?php _e( 'Search for:', 'presentation' ); ?></label>
        <input type="search" placeholder="<?php echo esc_attr( 'Search…', 'presentation' ); ?>" name="s" id="search-input" value="<?php echo esc_attr( get_search_query() ); ?>" />
        <input class="screen-reader-text" type="submit" id="search-submit" value="Search" />
    </div>
</form> -->
<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="row">
        <div class="large-12 columns">
            <div class="row collapse">
                <div class="large-8 columns">
                    <input type="text" name="s" id="s" placeholder="<?php esc_attr_e( 'Search elsegundo.org', 'foundation' ); ?>" />
                </div>
                <div class="large-4 columns search-button">
                    <input type="submit" class="button prefix" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'foundation' ); ?>" />
                </div>
            </div>
        </div>
    </div>
</form>
