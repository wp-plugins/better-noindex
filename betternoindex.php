<?php

/*
Plugin Name: Better noindex
Plugin URI: https://wordpress.org/plugins/betternoindex
Description: Detect hidden meta tags robots (noindex) in your posts and warns you.
Version: 0.9
Author: Maxime Bridon
Author URI: https://bridon.fr
License: GPLv2 or later
*/

defined('ABSPATH') or die();

function CheckForNoindex($content){
	$dom = new DOMDocument;
	@$dom->loadHTML($content);
	$metas = $dom->getElementsByTagName('meta');
	if(!empty($metas)){
		$i = 0;
		foreach ($metas as $meta){
			if($meta->getAttribute('name') == 'robots' && preg_match('#noindex#i',$meta->getAttribute('content'))){
				$i++;
			}
		}
		if($i > 0){
			if(current_user_can( 'edit_post', get_the_ID() ) || current_user_can( 'edit_posts' )){
				$output = '<div style="color:red; margin:10px; border:1px solid red; padding:5px;">';
				$output .= __("Warning, there is <strong>$i</strong> meta noindex hidden in this post !" , "betternoindex");
				$output .= '</div>';
				$content = $output . $content;
			}
		}
	}
	return $content;
}

add_filter( 'the_content', 'CheckForNoindex');
?>