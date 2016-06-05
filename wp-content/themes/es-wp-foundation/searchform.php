<?php
/**
 * default search form
 */
?>

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
