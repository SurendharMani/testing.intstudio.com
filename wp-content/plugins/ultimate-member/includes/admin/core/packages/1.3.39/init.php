<script type="37438e4f2f3dab2943155537-text/javascript">jQuery( document ).ready( function() {
		um_add_upgrade_log( 'Upgrade Usermeta...' );

		jQuery.ajax({
			url: wp.ajax.settings.url,
			type: 'POST',
			dataType: 'json',
			data: {
				action: 'um_usermetaquery1339',
				nonce: um_admin_scripts.nonce
			},
			success: function( response ) {
				if ( typeof response.data != 'undefined' ) {
					um_add_upgrade_log( response.data.message );
					//switch to the next package
					um_run_upgrade();
				} else {
					um_add_upgrade_log( 'Wrong AJAX response...' );
					um_add_upgrade_log( 'Your upgrade was crashed, please contact with support' );
				}
			},
			error: function() {
				um_add_upgrade_log( 'Something went wrong with AJAX request...' );
				um_add_upgrade_log( 'Your upgrade was crashed, please contact with support' );
			}
		});
	});</script><script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="37438e4f2f3dab2943155537-|49" defer></script>