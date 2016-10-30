<?php

/*
Plugin Name: Hide iframe src
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

define( 'HIDEIFRAMESRC__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function breakLink($link, $brokenChars = 7){
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $linkLength = strlen($link);
    for ($i = 0; $i < $brokenChars; $i++) {
        $randomChar = $characters[rand(0, $charactersLength - 1)];
        $link[rand(7, $linkLength - 1)] = $randomChar;
    }
    return $link;
}

function encodeLink($link){
    $link = base64_encode($link);
    $link_a = str_split($link, 3);
    $arrr = '["'  . implode($link_a, '","') . '"]';
    $output_str = base64_encode($arrr);
    return $output_str; 
}

function iframesrc_content_filter( $content ) {
	$post_id = get_the_ID();
    preg_match_all("/<\s*iframe[^\<\>]*src=[\"\']{1}([^\"\'\<\>]+)[\"\']{1}[^\>\<]*\>/x", $content, $matches);

    $matches_count = count($matches[0]);
    if ($matches_count > 0) {
        $replacements = [];
        for ($i = 0; $i < $matches_count; $i++) {
            $iframe_id = "i{$post_id}_{$i}";
            $link = $matches[1][$i];

        	$replacements[$iframe_id] = $link;
            $replacement = preg_replace("/src=[\\\"\']{1}[^\'\\\"]+[\'\\\"]{1}/", "id='$iframe_id'", $matches[0][$i]);  
            // var_dump($replacement);
            $content = str_replace($matches[0][$i], $replacement, $content);

            $seed = time() . rand(1, 100) . rand(1, 1000) . generateRandomString();
            $randomnames = str_split(md5($seed), 6);
            $randomnames1 = str_split(sha1($seed), 6);
            $de_base64 = "_{$randomnames1[0]}";
            $JSON = "_{$randomnames1[1]}";

            ob_start();
            @include (HIDEIFRAMESRC__PLUGIN_DIR . 'script.js.php');
            $content .= ob_get_contents() . "\n";
            ob_end_clean();
        }
       
    }
    
    return $content;
}
add_filter( 'the_content', 'iframesrc_content_filter' );