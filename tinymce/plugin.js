(function ()
{
	// create themeiumShortcodes plugin
	tinymce.create("tinymce.plugins.themeiumShortcodes",
	{
		init: function ( ed, url )
		{
			ed.addCommand("themeiumPopup", function ( a, params )
			{
				var popup = params.identifier;
				
				// load thickbox
				tb_show("Insert Themeium Shortcode", url + "/popup.php?popup=" + popup + "&width=" + 800);
			});
		},
		createControl: function ( btn, e )
		{
			if ( btn == "themeium_button" )
			{	
				var a = this;
				
				var btn = e.createSplitButton('themeium_button', {
                    title: "Insert Themeium Shortcode",
					image: ThemeiumShortcodes.plugin_folder +"/tinymce/images/icon.png",
					icons: false
                });

                btn.onRenderMenu.add(function (c, b)
				{					
					a.addWithPopup( b, "Alerts", "alert" );
					a.addWithPopup( b, "Buttons", "button" );
					a.addWithPopup( b, "Columns", "columns" );
					a.addWithPopup( b, "Tabs", "tabs" );
					a.addWithPopup( b, "Toggle", "toggle" );
				});
                
                return btn;
			}
			
			return null;
		},
		addWithPopup: function ( ed, title, id ) {
			ed.add({
				title: title,
				onclick: function () {
					tinyMCE.activeEditor.execCommand("themeiumPopup", false, {
						title: title,
						identifier: id
					})
				}
			})
		},
		addImmediate: function ( ed, title, sc) {
			ed.add({
				title: title,
				onclick: function () {
					tinyMCE.activeEditor.execCommand( "mceInsertContent", false, sc )
				}
			})
		},
		getInfo: function () {
			return {
				longname: 'Themeium Shortcodes',
				author: 'Nathan Parikh',
				authorurl: 'http://themeforest.net/user/nathanp/',
				infourl: 'http://themeium.com/',
				version: "1.3"
			}
		}
	});
	
	// add themeiumShortcodes plugin
	tinymce.PluginManager.add("themeiumShortcodes", tinymce.plugins.themeiumShortcodes);
})();