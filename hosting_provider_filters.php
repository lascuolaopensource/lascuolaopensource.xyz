<?php
/**
 * Begin modifications requested by hosting providers.
 *
 * You can safely remove this file to return your installation
 * to a vanilla state.
 */
/**
 * The following modification was requested by BlueHost, 7/9/2014
 * due to a high level of abuse and DDOS usage.
 *
 * To re-enable xmlrpc pingbacks, you can remove the code below this comment.
 *
 * For more info, see here:
 * http://blog.spiderlabs.com/2014/03/wordpress-xml-rpc-pingback-vulnerability-analysis.html
 */
if (function_exists('add_filter')) {
	function mojo_alter_hosting_provider_filters($methods) {
		if (isset($methods['pingback.ping'])) {
			unset($methods['pingback.ping']);
		}
		return $methods;
	}
	add_filter('xmlrpc_methods', 'mojo_alter_hosting_provider_filters');
}
