<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> 
        style="background-image: url(<?php echo get_theme_file_uri('/images/purple.png') ?>);">
    <header class="site-header">
        <nav class="navbar navbar-expand-lg navbar-light">

            <a href="<?php echo site_url() ?>"><img id="header_logo"
                    src="<?php echo get_theme_file_uri('/images/logo.png') ?>"></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="<?php echo site_url() ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo site_url('/about-us') ?>">O nas</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo site_url('/blog') ?>">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo site_url('/jak-to-dziala/') ?>">Jak to działa?</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo site_url('/kontakt/') ?>">Kontakt</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo site_url('/logowanie/') ?>"><button class="logowanie"
                                type="button">Logowanie</button></a>
                    </li>
                </ul>

            </div>
        </nav>
    </header>