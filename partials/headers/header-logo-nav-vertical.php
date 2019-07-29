<?php
/**
 * Header variant #2
 *
 * @package Maverick
 */

?>

<header id="masthead" class="site-header site-header--logo-nav-vert w-full" itemscope itemtype="http://schema.org/WPHeader">
	<a class="skip-link screen-reader-text" href="#main">Skip to content</a>

	<div class="site-header__inner flex items-center justify-between w-full m-auto">

		<?php Maverick\display_site_branding(); ?>

		<?php if ( has_nav_menu( 'primary' ) ) { ?>
			<button id="js-site-navigation__toggle" class="site-navigation__toggle c-site-navigation__toggle" type="button" aria-controls="js-primary-menu">
				<div class="site-navigation__toggle-icon">
					<div class="site-navigation__toggle-icon-inner"></div>
				</div>
				<span class="screen-reader-text"><?php esc_html_e( 'Menu', 'maverick' ); ?></span>
			</button>

			<nav id="js-primary-menu" class="site-navigation c-site-navigation" role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">

				<?php
					wp_nav_menu(
						[
							'theme_location' => 'primary',
							'menu_class'     => 'primary-menu c-primary-menu u-unlist',
							'container'      => false,
						]
					);
				?>

			</nav><!-- .site-navigation -->
		<?php } else { ?>
			<p class="u-informational"><a href="<?php echo esc_url( admin_url( 'nav-menus.php' ) ); ?>"><?php esc_html_e( 'Please assign a Primary menu to the header', 'maverick' ); ?></a></p>
		<?php } ?>
	</div>

</header><!-- #masthead .site-header -->