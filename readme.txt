=== Roomcloud ===
Contributors: roomcloud
Donate link: http://www.tecnes.com
Tags: Roomcloud booking engine
Requires at least: 4.0.1
Tested up to: 6.2.2
Requires PHP: 7.0.0 
Stable tag: 2.0.25
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html


== Description ==

Use Roomcloud plugin to embed our Booking Engine form into your wordpress site.
This allows your customers to make online reservations on the web site of your hotel.
More info at http://www.roomcloud.net

== Installation ==

1. Upload `roomcloud.php` to the `/wp-content/plugins/` directory
2. Upload CSS and JS folders to the `/wp-content/plugins/` directory
3. Activate the plugin through the 'Plugins' menu in WordPress
4. Depending on the Roomcloud Booking Engine version you use, prepare your shortcode string using one of the formats as described at https://apitest.roomcloud.net/wordpress and briefly listed below
	- SE1 Horizontal Search Form: [roomcloud hotel='xyz']
	- SE1 Multi Account Horizontal Search Form (for group of hotels): [roomcloud_multi hotel='xyz'  multi_id='xxx;yyy' multi_desc='xxx_desc;yyy_desc']
	- SE1 Vertical Search Form:  [roomcloud_vertical hotel='xyz']
	- SE1 iFrame: [roomcloud_iframe hotel='xyz']
	- SE1 iFrame with resizer module: [roomcloud_iframeResizer hotel='xyz']
	- SE2 Horizontal Search Form: [roomcloud_v2 hotel='xyz']
	- SE2 Multi Account Horizontal Search Form (for group of hotels): [roomcloud_multi_v2 hotel='xyz'  multi_id='xxx;yyy' multi_desc='xxx_desc;yyy_desc']
	- SE2 Vertical Search Form:  [roomcloud_vertical_v2 hotel='xyz']
5. Place the roomcloud shortcode inside the page of your website using wordpress page editor.
6. In case of internal page, place the roomcloud_iframe shortcode inside the page with specified page_id using wordpress page editor.

== Changelog ==
= 1.0 =
* Initial support
= 1.1 =
* Added roomcloud_iframe shortcode
= 1.3 =
* Contains a security bug fix to prevent cross-site scripting attacks
= 1.3.1 =
* Iframe src in https 
= 2.0 =
* SE2 integration
* multi account integration
* vertical form introduction
= 2.0.2 =
addess CSS and JS folders
= 2.0.3 =
added CSS and JS files
= 2.0.4 =
added parameter load_jquery
= 2.0.5 =
added litepicker support
= 2.0.6 =
fixed bug on vertical forms
= 2.0.7 =
updated Javascript
fixed bug on plugin positioning
= 2.0.8 =
updated Javascript
= 2.0.9 =
updated Javascript
= 2.0.10 =
removed text from btn
= 2.0.11 =
added parameter hide_children (set hide_children=1 to hide children in search options) 
= 2.0.12 =
added filter parameters property_id (to restrict the search results on a specific Property to use with multiProperties accounts) and room_type_id (to restrict the search results on a specific roomType) 
= 2.0.13 =
added parameters showcrossed (to extend the search results to the hotels of the group), open_dropdowns_on_top (to open the dropdown menu over the search bar)
= 2.0.14 =
fixed bug on curr parameter for roomcloud_multi_v2 shortcode
= 2.0.15 =
fixed croatian dictionary bug 
= 2.0.16 =
fixed hungarian dictionary bug 
= 2.0.19 =
fixed google automated translation plugin conflict
= 2.0.20 =
added parameter first_dow (0=sunday, 1 monday etc)
= 2.0.21 =
Javascript bug fix
= 2.0.22 =
Added parameter to hide promocode text field (set hide_pin=1 to hide promocode in search options) 
= 2.0.23 =
Added the prossibility to use "accomodation" label instead of room or apartment; set apt=1 to use apartment instead of room; set apt=2 to use accommodation
= 2.0.24 =
updated readme
= 2.0.25 =
replaced body declaration on CSS files
== Frequently Asked Questions ==
= Do I need a Roomcloud account? =
Yes. Please complete a signup  https://www.roomcloud.net/en/signup/

= I have logged into my account and configured it. What's next? =

Take note of your unique hotel code from roomcloud extranet. Go to wordpress admin page and install Roomcloud plugin. Then add your shortcode using one of the formats reported abovein the page of the website where you want to show the booking form. That's all! 

= Where can I get more information about Roomcloud booking engine? =

Goto http://www.roomcloud.net

= Do I need to have jQuery? =

Yes. If you haven't it add the parameter load_jquery='true' in the shortcodes

= Where can I find a complete guide? =

Please visit https://apitest.roomcloud.net/wordpress/

