<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- make page title dynamic -->
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div class="top-bar">
        <div class="row">
            <div class="top-bar-left">
                <ul class="menu">
                    <?php
                      $args = array(
                       'menu'    => 'header-menu',
                       'menu_class' => 'menu',
                       'container' => 'false'
                      );
                      wp_nav_menu( $args );
                    ?>
                </ul>
            </div>
            <div class="top-bar-right">
                <ul class="menu">
                    <li>
                        <?php get_search_form(); ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
