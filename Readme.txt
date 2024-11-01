=== Wp NonRegContent ===
Tags: register,hide,synopsis,post,private,hidden,user,control
Requires at least: 2.5.0
Tested up to: 2.5.1
Stable tag: 2.5.1
link: http://www.synapticdomination.com

== Description ==

Use this to display a short synopsis to readers who are not logged in and logged in readers see the entire article minus the synopsis.  To display content for non logged in readers, text situated between the [r] and [/] will be displayed.  To display content for logged in readers, text situated between the [n] and [\] will be shown.  This plugin allows you to hide portions of the post from both logged in and not logged in readers.  You can edit the single.php page to include a reminder that to read the entire post, you must login and/or register.  This plug-in is based on UCanHide by Jeremy Poulain (http://betablog.free.fr) which was based on Hidethis by Mark Edwards (http://www.edwards.org/tags/Wordpress).

== Installation ==

1. Copy Wp_nonregcontent.php into your Wordpress plugins folder, normally located
   in /wp-content/plugins/

== Frequently Asked Questions ==

To hide text from non-logged in readers, place text between the two tags [n] [\].  Text between [r] & [/] will be displayed.

To hide text from logged in readers, place text between the two tags [r] [/].  Text between [n] & [\] will be displayed.

Example post:
[r]
Synopsis only non logged in readers can see.
[/]
[n]
Entire article only logged in readers can see.
[\]


== Version History ==

= Version 1.0 =
* First and only release
* You can edit as you please