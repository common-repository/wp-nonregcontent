<?php
/*
Plugin Name: Wp-NonRegContent
Plugin URI: http://www.synapticdomination.com/
Description:  Use this to display a short synopsis to readers who are not logged in and logged in readers see the entire article minus the synopsis.  To display content for non logged in readers, text situated between the [r] and [/] will be displayed.  To display content for logged in readers, text situated between the [n] and [\] will be shown.
Version: 1.00
Author: Robert Dicus
Author URI: http://www.synapticdomination.com/
*/

/*
This plugin allows you to hide portions of the post from both logged in and not logged in readers.
You can edit the single.php page to include a reminder that to read the entire post, you must login and/or register.
This plug-in is based on UCanHide by Jeremy Poulain (http://betablog.free.fr) which was based on Hidethis by Mark Edwards (http://www.edwards.org/tags/Wordpress).

Example Post:
[r]
Synopsis only non logged in readers can see.
[/]
[n]
Entire article only logged in readers can see.
[\]
*/

function Wp_NonRegContent($text) {
 
//  Test on $user_login for valid user
  
	global $user_login;

        if ($user_login) {

//  Find the content to show and remove the non logged in content.
//  I used very short place holders for simplicity.  You can alter them to whatver you like.
//  I had to throw in the br removal for some reason.

	$posdebut = strpos($text, '[r]');
	$posfin = strpos($text, '[/]');
        

        $texttohide = substr($text,$posdebut,$posfin);
        $text = str_replace($texttohide, "", $text);  
	$text = str_replace('[n]', "", $text);
        $text = str_replace('[\]', "", $text);      
	$text = str_replace('<br />', "", $text);
        
        return $text;

        }

	elseif (!$user_login) {

//  Find the content to show and remove the logged in content.
//  I had to throw in the br removal for some reason.

	$posdebut = strpos($text, '[n]');
	$posfin = strpos($text, '[\]');
        

        $texttohide = substr($text,$posdebut,$posfin);
        $text = str_replace($texttohide, "", $text);  
	$text = str_replace('[r]', "", $text);
        $text = str_replace('[/]', "", $text);     
	$text = str_replace('<br />', "", $text);
        
        return $text;	

	}

	else {

//  Show everything if something goes wrong minus the tags.

        $text = str_replace('[r]', "", $text);
        $text = str_replace('[/]', "", $text);
	$text = str_replace('[n]', "", $text);
        $text = str_replace('[\]', "", $text);

        return $text;

        }
}

// Apply the filters, to get things going
add_filter('the_content', 'Wp_NonRegContent');

?>