<?php
/**
 * Plugin Name: f(x) Skype Link Enabler
 * Plugin URI: http://genbumedia.com/plugins/fx-skype-link-enabler/
 * Description: Enable Skype Protocol in Custom Menus Item URL &lt;a href="skype:user.name"&gt;.
 * Version: 1.0.1
 * Author: David Chandra Purnama
 * Author URI: http://shellcreeper.com/
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU 
 * General Public License version 2, as published by the Free Software Foundation.  You may NOT assume 
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without 
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @author David Chandra Purnama <david@genbu.me>
 * @copyright Copyright (c) 2016, Genbu Media
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
**/

/* Filter Allowed Protocol */
add_filter( 'kses_allowed_protocols' , 'fx_skype_link_enabler' );

/**
 * Add Skype in Allowed protocol
 * @since 1.0.0
 */
function fx_skype_link_enabler( $protocols ){
	$protocols[] = 'skype';
	return $protocols;
}