<?php
/**
 * Plugin Name: Abiquifi Gutenberg Image Alignment
 * Description: Restores centered alignment for Gutenberg images in post content.
 */

add_action(
	'wp_enqueue_scripts',
	static function () {
		$css = '
			.elementor-widget-raven-post-content {
				text-align: left !important;
			}

			.elementor-widget-raven-post-content .wp-block-image figure.aligncenter,
			.jupiterx-post-content .wp-block-image figure.aligncenter {
				margin-left: auto !important;
				margin-right: auto !important;
				text-align: left !important;
			}

			.elementor-widget-raven-post-content .wp-block-image figcaption,
			.jupiterx-post-content .wp-block-image figcaption {
				text-align: left !important;
			}
		';

		wp_add_inline_style( 'jupiterx-css', $css );
	},
	20
);
