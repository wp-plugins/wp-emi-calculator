=== WP EMI Calculator ===
Contributors: omikant
Donate Link: http://wptutorialspoint.com/
Tags: Icon List
Requires at least: 3.0.1
Tested up to: 4.2
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html


== Description ==

WP EMI Calculator plugin is for Add Icons with this Shortcode '[emi-calculator]'.


= Shortcode Options =
As of version 1.0, Please use '[emi-calculator]' or `<?php echo do_shortcode('[emi-calculator]'); ?>` shortcodes.

= Credits =

This plugin was written by WP Tutorials Point WordPress Team.

== Installation ==

= The easy way: =

1. Go to the Plugins Menu in WordPress
1. Search for "WP EMI Calculator"
1. Click 'Install'
1. Activate the plugin

= Manual Installation =

1. Download the plugin file from this page and unzip the contents
1. Upload the `wp-emi-calculator` folder to the `/wp-content/plugins/` directory
1. Activate the `wp-emi-calculator` plugin through the 'Plugins' menu in WordPress

= Once Activated =

1. Place the `[emi-calculator]` shortcode in a Page or Post
1. Create new items in the `Icon-list` post type, uploading a Featured Image for each.
	1. *Optional:* You can hyperlink each image by entering the desired url `Image Link URL` admin metabox when adding a new slider image.


== Frequently Asked Questions ==

= The Slider Shortcode =

Place the `[emi-calculator]` shortcode in a Page or Post

= Can I insert the carousel into a WordPress template instead of a page? =

Absolutely - you just need to use the [do_shortcode](http://codex.wordpress.org/Function_Reference/do_shortcode) WordPress function. For example:
`<?php echo do_shortcode('[emi-calculator]'); ?>`


== Screenshots ==

1. Admin list interface showing Slider images and titles.
2. Example output.(see documentation).

== Changelog ==

= 1.0 =
* Added shortcode attribute functionality for tweaking of slider options.


