<?php

// loads the shortcodes class, wordpress is loaded with it
require_once( 'shortcodes.class.php' );

// get popup type
$popup = trim( $_GET['popup'] );
$shortcode = new themeium_shortcodes( $popup );

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head></head>
<body>
<div id="themeium-popup">

	<div id="themeium-shortcode-wrap">
		
		<div id="themeium-sc-form-wrap">
		
			<div id="themeium-sc-form-head">
			
				<?php echo $shortcode->popup_title; ?>
			
			</div>
			<!-- /#themeium-sc-form-head -->
			
			<form method="post" id="themeium-sc-form">
			
				<table id="themeium-sc-form-table">
				
					<?php echo $shortcode->output; ?>
					
					<tbody>
						<tr class="form-row">
							<?php if( ! $shortcode->has_child ) : ?><td class="label">&nbsp;</td><?php endif; ?>
							<td class="field"><a href="#" class="button-primary themeium-insert">Insert Shortcode</a></td>							
						</tr>
					</tbody>
				
				</table>
				<!-- /#themeium-sc-form-table -->
				
			</form>
			<!-- /#themeium-sc-form -->
		
		</div>
		<!-- /#themeium-sc-form-wrap -->
		
		<div class="clear"></div>
		
	</div>
	<!-- /#themeium-shortcode-wrap -->

</div>
<!-- /#themeium-popup -->

</body>
</html>