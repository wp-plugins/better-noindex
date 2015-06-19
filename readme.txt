=== Better noindex ===
Contributors: MaximeB
Tags: seo, google, noindex
Requires at least: 3.0.1
Tested up to: 4.2.2
Stable tag: trunk
License: GPLv2 or later

Warns the author or admin in case of <code>&lt;meta name="robots" content="noindex"&gt;</code> hidden in a post.

== Description ==

This plugin will check if there are some hidden meta tags with noindex and warns the author of the article. The warning is only visible for the author of the post, or the admin(s).

**Features :** 

* Check the content of a post and detect the presence of meta tags with robots/noindex in it.

== Installation ==

1. Download the plugin zip archive.
2. Extract it in your `wp-content/plugins` folder or upload via admin panel.
3. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= What do I have to do if the plugins detects some hidden meta tags ? =

If you see a warning, just edit the post (in plain text mode) and delete the hidden metas.

== Changelog ==

= 0.9.1 =
* 2015/06/19
* Some minor changes in plugins descriptions

= 0.9 =
* 2015/06/19
* First release