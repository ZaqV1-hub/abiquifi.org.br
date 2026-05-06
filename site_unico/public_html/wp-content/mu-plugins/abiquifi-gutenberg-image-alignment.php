<?php
/**
 * Plugin Name: Abiquifi Gutenberg Image Alignment
 * Description: Restores centered alignment for Gutenberg images in post content.
 */

add_action(
	'wp_enqueue_scripts',
	static function () {
		$css = '
			.jupiterx-post-content .wp-block-image .aligncenter {
				text-align: center;
			}

			.jupiterx-post-content .wp-block-image .aligncenter picture {
				display: inline-block;
				max-width: 100%;
			}

			.jupiterx-post-content .wp-block-image .aligncenter img {
				margin-left: auto;
				margin-right: auto;
			}
		';

		wp_add_inline_style( 'jupiterx-css', $css );
	},
	20
);
