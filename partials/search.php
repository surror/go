<?php
/**
 * The basic search form template.
 *
 * @package Maverick
 */

?>
<form role="search" id="searchform" class="search-form" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<meta itemprop="target" content="<?php echo esc_url( home_url() ); ?>/?s={s}" />
	<label for="search-form__label">
		<span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'maverick' ); ?></span>
	</label>
	<input itemprop="query-input" type="search" id="search-field" class="input input--search search-form__input" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'maverick' ); ?>" name="s" />
	<button type="submit" class="button search-input__button">
		<span class="search-input__label"><?php echo esc_attr_x( 'Submit', 'submit button', 'maverick' ); ?></span>
		<svg class="search-input__arrow-icon" width="30" height="28" viewBox="0 0 30 28" fill="inherit" xmlns="http://www.w3.org/2000/svg">
			<g clip-path="url(#clip0)">
				<path d="M16.1279 0L29.9121 13.7842L16.1279 27.5684L14.8095 26.25L26.3378 14.7217H-6.10352e-05V12.8467H26.3378L14.8095 1.31844L16.1279 0Z" fill="inherit"/>
			</g>
			<defs>
				<clipPath id="clip0">
					<rect width="29.9121" height="27.5684" fill="white"/>
				</clipPath>
			</defs>
		</svg>
	</button>
</form><!-- #searchform .search-form -->