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
        <div class="header__logo">
            <a href="/">Logotype</a>
        </div>

		<nav class="header__navigation">
            <ul>
                <li>About</li>
                <li>How it works</li>
                <li>Casino</li>
                <li>Contacts</li>
            </ul>
		</nav><!-- #site-navigation -->
        <div class="header__lang"><a href="#">KZ</a>
            <ul>
                <li><a href="#">Themes</a></li>
                <li><a href="#">Plugins</a></li>
                <li><a href="#">Tutorials</a></li>
            </ul>
        </div>
	</header><!-- #masthead -->
