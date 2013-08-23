
// start the popup specefic scripts
// safe to use $
jQuery(document).ready(function($) {
    var themeiums = {
    	loadVals: function()
    	{
    		var shortcode = $('#_themeium_shortcode').text(),
    			uShortcode = shortcode;
    		
    		// fill in the gaps eg {{param}}
    		$('.themeium-input').each(function() {
    			var input = $(this),
    				id = input.attr('id'),
    				id = id.replace('themeium_', ''),		// gets rid of the themeium_ prefix
    				re = new RegExp("{{"+id+"}}","g");
    				
    			uShortcode = uShortcode.replace(re, input.val());
    		});
    		
    		// adds the filled-in shortcode as hidden input
    		$('#_themeium_ushortcode').remove();
    		$('#themeium-sc-form-table').prepend('<div id="_themeium_ushortcode" class="hidden">' + uShortcode + '</div>');
    	},
    	cLoadVals: function()
    	{
    		var shortcode = $('#_themeium_cshortcode').text(),
    			pShortcode = '';
    			shortcodes = '';
    		
    		// fill in the gaps eg {{param}}
    		$('.child-clone-row').each(function() {
    			var row = $(this),
    				rShortcode = shortcode;
    			
    			$('.themeium-cinput', this).each(function() {
    				var input = $(this),
    					id = input.attr('id'),
    					id = id.replace('themeium_', '')		// gets rid of the themeium_ prefix
    					re = new RegExp("{{"+id+"}}","g");
    					
    				rShortcode = rShortcode.replace(re, input.val());
    			});
    	
    			shortcodes = shortcodes + rShortcode + "\n";
    		});
    		
    		// adds the filled-in shortcode as hidden input
    		$('#_themeium_cshortcodes').remove();
    		$('.child-clone-rows').prepend('<div id="_themeium_cshortcodes" class="hidden">' + shortcodes + '</div>');
    		
    		// add to parent shortcode
    		this.loadVals();
    		pShortcode = $('#_themeium_ushortcode').text().replace('{{child_shortcode}}', shortcodes);
    		
    		// add updated parent shortcode
    		$('#_themeium_ushortcode').remove();
    		$('#themeium-sc-form-table').prepend('<div id="_themeium_ushortcode" class="hidden">' + pShortcode + '</div>');
    	},
    	children: function()
    	{
    		// assign the cloning plugin
    		$('.child-clone-rows').appendo({
    			subSelect: '> div.child-clone-row:last-child',
    			allowDelete: false,
    			focusFirst: false
    		});
    		
    		// remove button
    		$('.child-clone-row-remove').live('click', function() {
    			var	btn = $(this),
    				row = btn.parent();
    			
    			if( $('.child-clone-row').size() > 1 )
    			{
    				row.remove();
    			}
    			else
    			{
    				alert('You need a minimum of one row');
    			}
    			
    			return false;
    		});
    		
    		// assign jUI sortable
    		$( ".child-clone-rows" ).sortable({
				placeholder: "sortable-placeholder",
				items: '.child-clone-row'
				
			});
    	},
    	resizeTB: function()
    	{
			var	ajaxCont = $('#TB_ajaxContent'),
				tbWindow = $('#TB_window'),
				themeiumPopup = $('#themeium-popup');

            tbWindow.css({
                height: themeiumPopup.outerHeight() + 50,
                width: themeiumPopup.outerWidth(),
                marginLeft: -(themeiumPopup.outerWidth()/2)
            });

			ajaxCont.css({
				paddingTop: 0,
				paddingLeft: 0,
				paddingRight: 0,
				height: (tbWindow.outerHeight()-47),
				overflow: 'auto', // IMPORTANT
				width: themeiumPopup.outerWidth()
			});
			
			$('#themeium-popup').addClass('no_preview');
    	},
    	load: function()
    	{
    		var	themeiums = this,
    			popup = $('#themeium-popup'),
    			form = $('#themeium-sc-form', popup),
    			shortcode = $('#_themeium_shortcode', form).text(),
    			popupType = $('#_themeium_popup', form).text(),
    			uShortcode = '';
    		
    		// resize TB
    		themeiums.resizeTB();
    		$(window).resize(function() { themeiums.resizeTB() });
    		
    		// initialise
    		themeiums.loadVals();
    		themeiums.children();
    		themeiums.cLoadVals();
    		
    		// update on children value change
    		$('.themeium-cinput', form).live('change', function() {
    			themeiums.cLoadVals();
    		});
    		
    		// update on value change
    		$('.themeium-input', form).change(function() {
    			themeiums.loadVals();
    		});
    		
    		// when insert is clicked
    		$('.themeium-insert', form).click(function() {    		 			
    			if(window.tinyMCE)
				{
					window.tinyMCE.execInstanceCommand('content', 'mceInsertContent', false, $('#_themeium_ushortcode', form).html());
					tb_remove();
				}
    		});
    	}
	}
    
    // run
    $('#themeium-popup').livequery( function() { themeiums.load(); } );
});