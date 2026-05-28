<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="site-header__container">
        <div class="site-header__logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-header__logo-link">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.jpeg" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?> Logo" class="site-header__logo-img" width="270" height="60">
            </a>
        </div>

        <div class="site-header__right">
            <nav class="site-header__nav" id="primary-navigation" aria-label="<?php esc_attr_e( 'Primary Navigation', 'smile-final' ); ?>">
                <?php
                if ( has_nav_menu( 'primary' ) ) {
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'container'      => false,
                        'menu_class'     => 'site-header__menu',
                        'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'fallback_cb'    => false,
                    ) );
                }
                ?>
            </nav>

            <div class="site-header__actions">
                <a href="tel:0395931811" class="site-header__btn site-header__btn--phone">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon-phone" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    03 9593 1811
                </a>
                <a href="/book-consultation" class="site-header__btn site-header__btn--primary">
                    Book Consultation
                </a>
            </div>
        </div>

        <button class="site-header__toggle" aria-controls="primary-navigation" aria-expanded="false">
            <span class="sr-only"><?php esc_html_e( 'Toggle menu', 'smile-final' ); ?></span>
            <span class="site-header__toggle-icon"></span>
        </button>
        <a href="/book-consultation" class="site-header__btn site-header__btn--primary site-header__btn--mobile">
            Apply Now
        </a>
    </div>
</header>