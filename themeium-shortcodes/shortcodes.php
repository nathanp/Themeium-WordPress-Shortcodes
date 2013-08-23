<?php

/*-----------------------------------------------------------------------------------*/
/*	Column Shortcodes
/*-----------------------------------------------------------------------------------*/

if (!function_exists('themeium_one_third')) {
	function themeium_one_third( $atts, $content = null ) {
	   return '<div class="themeium-one-third">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('themeium_one_third', 'themeium_one_third');
}

if (!function_exists('themeium_one_third_last')) {
	function themeium_one_third_last( $atts, $content = null ) {
	   return '<div class="themeium-one-third themeium-column-last">' . do_shortcode($content) . '</div><div class="clear"></div>';
	}
	add_shortcode('themeium_one_third_last', 'themeium_one_third_last');
}

if (!function_exists('themeium_two_third')) {
	function themeium_two_third( $atts, $content = null ) {
	   return '<div class="themeium-two-third">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('themeium_two_third', 'themeium_two_third');
}

if (!function_exists('themeium_two_third_last')) {
	function themeium_two_third_last( $atts, $content = null ) {
	   return '<div class="themeium-two-third themeium-column-last">' . do_shortcode($content) . '</div><div class="clear"></div>';
	}
	add_shortcode('themeium_two_third_last', 'themeium_two_third_last');
}

if (!function_exists('themeium_one_half')) {
	function themeium_one_half( $atts, $content = null ) {
	   return '<div class="themeium-one-half">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('themeium_one_half', 'themeium_one_half');
}

if (!function_exists('themeium_one_half_last')) {
	function themeium_one_half_last( $atts, $content = null ) {
	   return '<div class="themeium-one-half themeium-column-last">' . do_shortcode($content) . '</div><div class="clear"></div>';
	}
	add_shortcode('themeium_one_half_last', 'themeium_one_half_last');
}

if (!function_exists('themeium_one_fourth')) {
	function themeium_one_fourth( $atts, $content = null ) {
	   return '<div class="themeium-one-fourth">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('themeium_one_fourth', 'themeium_one_fourth');
}

if (!function_exists('themeium_one_fourth_last')) {
	function themeium_one_fourth_last( $atts, $content = null ) {
	   return '<div class="themeium-one-fourth themeium-column-last">' . do_shortcode($content) . '</div><div class="clear"></div>';
	}
	add_shortcode('themeium_one_fourth_last', 'themeium_one_fourth_last');
}

if (!function_exists('themeium_three_fourth')) {
	function themeium_three_fourth( $atts, $content = null ) {
	   return '<div class="themeium-three-fourth">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('themeium_three_fourth', 'themeium_three_fourth');
}

if (!function_exists('themeium_three_fourth_last')) {
	function themeium_three_fourth_last( $atts, $content = null ) {
	   return '<div class="themeium-three-fourth themeium-column-last">' . do_shortcode($content) . '</div><div class="clear"></div>';
	}
	add_shortcode('themeium_three_fourth_last', 'themeium_three_fourth_last');
}

if (!function_exists('themeium_one_fifth')) {
	function themeium_one_fifth( $atts, $content = null ) {
	   return '<div class="themeium-one-fifth">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('themeium_one_fifth', 'themeium_one_fifth');
}

if (!function_exists('themeium_one_fifth_last')) {
	function themeium_one_fifth_last( $atts, $content = null ) {
	   return '<div class="themeium-one-fifth themeium-column-last">' . do_shortcode($content) . '</div><div class="clear"></div>';
	}
	add_shortcode('themeium_one_fifth_last', 'themeium_one_fifth_last');
}

if (!function_exists('themeium_two_fifth')) {
	function themeium_two_fifth( $atts, $content = null ) {
	   return '<div class="themeium-two-fifth">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('themeium_two_fifth', 'themeium_two_fifth');
}

if (!function_exists('themeium_two_fifth_last')) {
	function themeium_two_fifth_last( $atts, $content = null ) {
	   return '<div class="themeium-two-fifth themeium-column-last">' . do_shortcode($content) . '</div><div class="clear"></div>';
	}
	add_shortcode('themeium_two_fifth_last', 'themeium_two_fifth_last');
}

if (!function_exists('themeium_three_fifth')) {
	function themeium_three_fifth( $atts, $content = null ) {
	   return '<div class="themeium-three-fifth">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('themeium_three_fifth', 'themeium_three_fifth');
}

if (!function_exists('themeium_three_fifth_last')) {
	function themeium_three_fifth_last( $atts, $content = null ) {
	   return '<div class="themeium-three-fifth themeium-column-last">' . do_shortcode($content) . '</div><div class="clear"></div>';
	}
	add_shortcode('themeium_three_fifth_last', 'themeium_three_fifth_last');
}

if (!function_exists('themeium_four_fifth')) {
	function themeium_four_fifth( $atts, $content = null ) {
	   return '<div class="themeium-four-fifth">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('themeium_four_fifth', 'themeium_four_fifth');
}

if (!function_exists('themeium_four_fifth_last')) {
	function themeium_four_fifth_last( $atts, $content = null ) {
	   return '<div class="themeium-four-fifth themeium-column-last">' . do_shortcode($content) . '</div><div class="clear"></div>';
	}
	add_shortcode('themeium_four_fifth_last', 'themeium_four_fifth_last');
}

if (!function_exists('themeium_one_sixth')) {
	function themeium_one_sixth( $atts, $content = null ) {
	   return '<div class="themeium-one-sixth">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('themeium_one_sixth', 'themeium_one_sixth');
}

if (!function_exists('themeium_one_sixth_last')) {
	function themeium_one_sixth_last( $atts, $content = null ) {
	   return '<div class="themeium-one-sixth themeium-column-last">' . do_shortcode($content) . '</div><div class="clear"></div>';
	}
	add_shortcode('themeium_one_sixth_last', 'themeium_one_sixth_last');
}

if (!function_exists('themeium_five_sixth')) {
	function themeium_five_sixth( $atts, $content = null ) {
	   return '<div class="themeium-five-sixth">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('themeium_five_sixth', 'themeium_five_sixth');
}

if (!function_exists('themeium_five_sixth_last')) {
	function themeium_five_sixth_last( $atts, $content = null ) {
	   return '<div class="themeium-five-sixth themeium-column-last">' . do_shortcode($content) . '</div><div class="clear"></div>';
	}
	add_shortcode('themeium_five_sixth_last', 'themeium_five_sixth_last');
}


/*-----------------------------------------------------------------------------------*/
/*	Buttons
/*-----------------------------------------------------------------------------------*/

if (!function_exists('themeium_button')) {
	function themeium_button( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'url' => '#',
			'target' => '_self',
			'style' => 'grey',
			'size' => 'small',
			'type' => 'round'
	    ), $atts));
		
	   return '<a target="'.$target.'" class="themeium-button '.$size.' '.$style.' '. $type .'" href="'.$url.'">' . do_shortcode($content) . '</a>';
	}
	add_shortcode('themeium_button', 'themeium_button');
}


/*-----------------------------------------------------------------------------------*/
/*	Alerts
/*-----------------------------------------------------------------------------------*/

if (!function_exists('themeium_alert')) {
	function themeium_alert( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'style'   => 'white'
	    ), $atts));
		
	   return '<div class="themeium-alert '.$style.'">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('themeium_alert', 'themeium_alert');
}


/*-----------------------------------------------------------------------------------*/
/*	Toggle Shortcodes
/*-----------------------------------------------------------------------------------*/

if (!function_exists('themeium_toggle')) {
	function themeium_toggle( $atts, $content = null ) {
	    extract(shortcode_atts(array(
			'title'    	 => 'Title goes here',
			'state'		 => 'open'
	    ), $atts));
	
		return "<div data-id='".$state."' class=\"themeium-toggle\"><span class=\"themeium-toggle-title\">". $title ."</span><div class=\"themeium-toggle-inner\">". do_shortcode($content) ."</div></div>";
	}
	add_shortcode('themeium_toggle', 'themeium_toggle');
}


/*-----------------------------------------------------------------------------------*/
/*	Tabs Shortcodes
/*-----------------------------------------------------------------------------------*/

if (!function_exists('themeium_tabs')) {
	function themeium_tabs( $atts, $content = null ) {
		$defaults = array();
		extract( shortcode_atts( $defaults, $atts ) );
		
		STATIC $i = 0;
		$i++;

		// Extract the tab titles for use in the tab widget.
		preg_match_all( '/tab title="([^\"]+)"/i', $content, $matches, PREG_OFFSET_CAPTURE );
		
		$tab_titles = array();
		if( isset($matches[1]) ){ $tab_titles = $matches[1]; }
		
		$output = '';
		
		if( count($tab_titles) ){
		    $output .= '<div id="themeium-tabs-'. $i .'" class="themeium-tabs"><div class="themeium-tab-inner">';
			$output .= '<ul class="themeium-nav themeium-clearfix">';
			
			foreach( $tab_titles as $tab ){
				$output .= '<li><a href="#themeium-tab-'. sanitize_title( $tab[0] ) .'">' . $tab[0] . '</a></li>';
			}
		    
		    $output .= '</ul>';
		    $output .= do_shortcode( $content );
		    $output .= '</div></div>';
		} else {
			$output .= do_shortcode( $content );
		}
		
		return $output;
	}
	add_shortcode( 'themeium_tabs', 'themeium_tabs' );
}

if (!function_exists('themeium_tab')) {
	function themeium_tab( $atts, $content = null ) {
		$defaults = array( 'title' => 'Tab' );
		extract( shortcode_atts( $defaults, $atts ) );
		
		return '<div id="themeium-tab-'. sanitize_title( $title ) .'" class="themeium-tab">'. do_shortcode( $content ) .'</div>';
	}
	add_shortcode( 'themeium_tab', 'themeium_tab' );
}

?>