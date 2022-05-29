<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gowell
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'gowell' ); ?></a>

        <header id="masthead" class="site-header">
            <div class="site-branding">
                <?php
			the_custom_logo();
			if ( is_front_page() ) :
				?>
                <div class="container-fluid top-bar">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-sm-4 col-7 d-flex">
                                <div class="social-icons">
                                    <i class="text-white fa-brands fa-facebook-f"></i>
                                    <i class="text-white fa-brands fa-twitter"></i>
                                    <i class="text-white fa-brands fa-linkedin-in"></i>
                                    <i class="text-white fa-brands fa-google-plus-g"></i>
                                </div>
                                <div class="border-right">
                                    <div class="select-country px-3 pt-2.5">Select your country</div>
                                    <div class="select-country px-3 pt-2.5">Select your language</div>
                                    <div class="select-country px-3 pt-2.5">Select your currency</div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-sm-8 col-5 d-flex justify-content-end">
                                <div class="border-right d-flex">

                                    <div class="px-3 pt-2.5"><a href="#"><i
                                                class="fa-solid fa-user pe-2"></i>Register</a></div>
                                    <div class="px-3 pt-2.5"><a href="#"><i
                                                class="fa-solid fa-user pe-2"></i>Register</a></div>
                                    <div class="px-3 pt-2.5"><a href="#"><i
                                                class="fa-solid fa-user pe-2"></i>Register</a></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg front-header">
                    <div class="container-fluid">
                        <div class="container">
                            <a class="navbar-brand" href="#"><img
                                    src="<?php echo get_template_directory_uri().'/inc/images/logo1.png' ?>"></a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 float-left">
                                    <nav id="site-navigation" class="main-navigation">
                                        <button class="menu-toggle" aria-controls="primary-menu"
                                            aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'gowell' ); ?></button>
                                        <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'menu-1',
                                        'menu_id'        => 'primary-menu',
                                    )
                                );
                                ?>
                                    </nav><!-- #site-navigation -->
                                </ul>
                            </div>
                        </div>

                    </div>
                </nav>
                <?php
			else :
				?>
                <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                        rel="home"><?php bloginfo( 'name' ); ?></a></p>
                <?php
			endif;
			$gowell_description = get_bloginfo( 'description', 'display' );
			if ( $gowell_description || is_customize_preview() ) :
				?>
                <p class="site-description">
                    <?php echo $gowell_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                </p>
                <?php endif; ?>
            </div><!-- .site-branding -->


        </header><!-- #masthead -->