<?php
/*
Plugin Name: jQuery Latest News Ticker
Plugin URI: http://wordpress.org/plugins/jquery-latest-news-ticker/
Description: jQuery Latest News Ticker is a Wordpress version of a flexible and easy to configure news ticker plguin. The original version was developed by <a href="https://github.com/rhodimus" target="_blank">rhodimus</a> and can be found at <a href="http://www.jquerynewsticker.com/">http://www.jquerynewsticker.com/</a>. 
Version: 1.0.2
Author: Himadri Ganguly
Author URI: http://www.colourdrift.com
License: GPL2
*/

/*  Copyright 2014  Himadri Ganguly  (email : himadri@colourdrift.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

	/**
	 * Define constants
	 *
	 * @since 1.0.0
	 */
	if ( WP_DEBUG ) {
		define ( 'CLRDR_LN_VERSION', '1.0.0-'.time() );
	} else {
		define ( 'CLRDR_LN_VERSION', '1.0.0' );
	}
	define ( 'CLRDR_LN_DIR', plugin_dir_path(__FILE__) );
	define ( 'CLRDR_LN_URL', plugins_url().'/jquery-latest-news-ticker' );
		
	require_once( CLRDR_LN_DIR.'includes/helper.php' );
	require_once( CLRDR_LN_DIR.'includes/scripts.php' );
	require_once( CLRDR_LN_DIR.'includes/functions.php' );
	require_once( CLRDR_LN_DIR.'includes/shortcodes.php' );
	
	if( is_admin() ) 
	{
		// Load admin code
		require_once( CLRDR_LN_DIR.'includes/custom-post-type-helper-functions.php' );
		require_once( CLRDR_LN_DIR.'includes/custom-post-type-helper-class.php' );		
		require_once( CLRDR_LN_DIR.'includes/post-types.php' );		
	}	
