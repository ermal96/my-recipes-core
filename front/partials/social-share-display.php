<?php
/**
 * Provide the social sharing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       www.crispybacon.it
 * @since      1.0.0
 *
 * @package    Crispybacon_Wilier_Magazine_Core
 * @subpackage Crispybacon_Wilier_Magazine_Core/front/partials
 */

?>

	<button type="button" class="open-social-sharing"><i class="fal fa-share-alt"></i>
	</button>
	<div class="social-sharing-modal">
				<h4><?php esc_attr_e( 'Share on', 'my-recipes-core' ) ?></h4>
				<div class="socials">
					<a href="mailto:?body=<?php echo get_permalink(); ?>"><i class="fal fa-envelope"></i></a>

					<a href="https://twitter.com/intent/tweet?url=<?php echo get_permalink(); ?>" target="_blank">
					<i class="fab fa-twitter"></i></a>

					<a href="https://www.facebook.com/share.php?u=<?php echo get_permalink(); ?>" target="_blank">
					<i class="fab fa-facebook-f"></i></a>

					<a href="https://api.whatsapp.com/send?text=<?php echo urlencode( get_permalink() ); ?>" target="_blank"><i class="fab fa-whatsapp"></i></a>

					<a href="http://pinterest.com/pin/create/link/?url=<?php echo get_permalink(); ?>"
					target="_blank"><i class="fab fa-pinterest"></i></a>

				</div>
				<div class="copy-link">
					<input type="text" value="<?php echo get_permalink(); ?>" readonly>
					<button type="button" class="copy-link-btn"
							data-value="<?php echo get_permalink(); ?>"><?php esc_html_e( 'Copy', 'mr-recipes-core' ); ?></button>
					<p id="link-text"></p>
				</div>

	</div>

