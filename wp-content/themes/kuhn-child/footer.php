<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kuhn
 */

?>



	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php if( has_nav_menu( 'social' ) ) { ?>
			<nav class="social-menu">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'social',
						'menu_class'     => 'social-links-menu',
						'depth'          => 1,
						'link_before'    => '<span class="screen-reader-text">',
						'link_after'     => '</span>' . kuhn_get_svg( array( 'icon' => 'chain' ) ),
					) );
				?>
			</nav><!-- .social-menu -->
		<?php } ?>
		<div class="site-info">
			<span class="sitemeta">
				<a href="<?php echo esc_url( __( 'http://zoedjukic.com', 'kuhn' ) ); ?>"><?php printf( esc_html__( 'Copyright © 2018 Zoe Djukic. All rights reserved.' )); ?></a>
			</span>
			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
<!-- #page -->

<?php wp_footer(); ?>