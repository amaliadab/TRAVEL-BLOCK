<!DOCTYPE html>

<meta name="viewport" content="width=device-width, initial-scale=1" />
<html <?php language_attributes(); ?>>
    <head>

        <title><?php my_title(); ?>  <?php bloginfo( 'name' ) ?> <?php bloginfo( 'description' );?> </title>
        <meta charset="UTF-8">

        <?php wp_head(); ?>

    </head>
    <body <?php body_class( 'myclass' ); ?>>

        <header>
            <div class="header-container">
                <h1>  <?php bloginfo( 'name' ); ?> </h1>
                <h4> <?php bloginfo( 'description' );?></h4>

                <?php
                    wp_nav_menu( array(
                        'theme_location' => 'main-navigation',
                        'container'      => 'div', 
                        'menu_class'     => 'main-navigation', 
                        'menu_id'        => 'main-navigation'
                    ));
                ?>
            </div>
        </header>

        <div class="main-container">
            <main>