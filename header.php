<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package casino
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

<body>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header class="header">
        <div class="mobile-menu" onclick="mobMenu(this)">
            <div class="mobile-menu__bar1"></div>
            <div class="mobile-menu__bar2"></div>
            <div class="mobile-menu__bar3"></div>
        </div>
        <div class="header__logo logo">
            <a class="link logo__name" href="#">Logotype</a>
        </div>

		<nav class="navigation">
            <ul class="main-navigation">
                <li class="link item-nav main-navigation__item">About</li>
                <li class="link item-nav main-navigation__item">How it works</li>
                <li class="link item-nav main-navigation__item">Casino</li>
                <li class="link item-nav main-navigation__item">Contacts</li>
            </ul>
		</nav><!-- #site-navigation -->
        <div class="header__lang">
            <div class="lang" href="#">KZ
                <ul class="lang-menu lang__menu">
                    <li class="lang-menu__item"><a href="#" class="link">KZ</a></li>
                    <li class="lang-menu__item"><a href="#" class="link">RU</a></li>
                </ul>
            </div>

        </div>
	</header><!-- #masthead -->
