<?php
/**
* Class LinkSubpages
*/
class LinkSubpages {


	function __construct() {
		add_shortcode( 'linksubpages', array( $this, 'shortcode_linksubpages' ) );
	}

	public function shortcode_linksubpages() {
		global $post;
		if ( is_page() ) {
			$args       = [
				'title_li'   => '',
				'child_of'   => $post->ID,
				'echo'       => false,
				'depth'      => 1,
				'sort_order' => 'menu_order',
			];
			$childpages = wp_list_pages( $args );

			if ( $childpages ) {
				$content        = __( 'Subpages: ', 'linksubpages' ) . '<ul style="list-style-type: none;">' . $childpages . '</ul>';
				$styled_content = preg_replace( '/<li/', '<li style="display:inline;"', $content );

				$separator = ' | ';
				$pattern   = '/(<\/a>).*?(<\/li>).*?(<li)/is';
				$replace   = '</a>' . $separator . '</li><li';
				$output    = preg_replace( $pattern, $replace, $styled_content );
			}

			return $output;

		}
	}
}
