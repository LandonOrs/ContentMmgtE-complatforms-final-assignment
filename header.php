<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        // Meta tags and WordPress head function
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header>
            // Container for logo and navigation (If there is one..)
            <div class="container">
                <?php if (has_custom_logo()) : ?>
                    <div class="logo">
                        <?php the_custom_logo(); ?>
                    </div>
                <?php endif; ?>
                <nav>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'main-menu',
                        'container' => false,
                        'menu_class' => 'main-menu',
                    ));
                    ?>
                </nav>
            </div>
        </header>
    </body>