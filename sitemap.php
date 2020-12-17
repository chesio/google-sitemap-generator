<?php

/*
 $Id$

 Google XML Sitemaps Generator for WordPress
 ==============================================================================

 This generator will create a sitemaps.org compliant sitemap of your WordPress site.

 For additional details like installation instructions, please check the readme.txt and documentation.txt files.

 Have fun!
   Arne

 Info for WordPress:
 ==============================================================================
 Plugin Name: Google XML Sitemaps
 Plugin URI: http://www.arnebrachhold.de/redir/sitemap-home/
 Description: This plugin improves SEO using sitemaps for best indexation by search engines like Google, Bing, Yahoo and others.
 Version: 4.1.0.pl-2020-01-29
 Author: Arne Brachhold
 Author URI: http://www.arnebrachhold.de/
 Text Domain: sitemap
 Domain Path: /lang
 GitHub Plugin URI: https://github.com/chesio/google-sitemap-generator


 Copyright 2005 - 2018 ARNE BRACHHOLD  (email : himself - arnebrachhold - de)

 This program is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with this program; if not, write to the Free Software
 Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

 Please see license.txt for the full license.

*/

define("SM_SUPPORTFEED_URL","https://wordpress.org/support/plugin/google-sitemap-generator/feed/");

/**
 * Returns the file used to load the sitemap plugin
 *
 * @package sitemap
 * @since 4.0
 * @return string The path and file of the sitemap plugin entry point
 */
function sm_GetInitFile() {
	return __FILE__;
}

//Don't do anything if this file was called directly
if (defined('ABSPATH') && defined('WPINC') && !class_exists("GoogleSitemapGeneratorLoader", false)) {
	require_once(trailingslashit(dirname(__FILE__)) . "sitemap-loader.php");
}
