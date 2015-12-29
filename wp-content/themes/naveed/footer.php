<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php if ( has_nav_menu( 'primary' ) ) : ?>
				<nav class="main-navigation" role="navigation" aria-label="<?php _e( 'Footer Primary Menu', 'twentysixteen' ); ?>">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'menu_class'     => 'primary-menu',
						 ) );
					?>
				</nav><!-- .main-navigation -->
			<?php endif; ?>

				<nav class="social-media-links" role="navigation">
                    <ul>
					<?php
						$socialLinksDir = get_stylesheet_directory_uri()."/images/social-icons/";
                        $links = [
                            'google-plus' => "https://plus.google.com/105523247940608568907/about",
                            'linkedin' => "https://pk.linkedin.com/in/naveed-ul-hassan-malik-0a633355",
                            'twitter' => "https://twitter.com/engrnvd",
                        ];
                        foreach ( $links as $link => $url ){ ?>
                            <li>
                                <a href="<?=$url?>" target="_blank">
                                    <img src="<?=$socialLinksDir.$link?>.png" alt="<?=ucwords(str_replace("-","",$link))?>">
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
				</nav><!-- .social-navigation -->

			<div class="site-info">
			</div><!-- .site-info -->
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
