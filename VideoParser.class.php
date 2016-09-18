<?php

/** 
* Video Parser class for Youtube
* @author Mathis André
* @version 1.0
*/

class VideoParser {
	/**
	* Get the Youtube video id 
	* @param $uri full youtube video url
	* @return string|bool
	*/
	public static function get_id_youtubeURI($uri) {
		
		$pattern = '/(watch\?)[v|embed]=(.*)/';
		preg_match($pattern, $uri, $matches);

		if( sizeof($matches) > 0 ) {
			return $matches[2];
		}
		return false;
	}

	/**
	* Get the Youtube video embed 
	* @param $uri full youtube video url
	* @return string|bool
	*/
	public static function get_embed_youtubeURI($uri, $autoplay=false) {
		$autoplay = (!$autoplay) ? '0' : '1';

		$pattern = '/(watch\?)[v|embed]=(.*)/';
		preg_match($pattern, $uri, $matches);

		if( sizeof($matches) > 0 ) {
			$result = 'https://www.youtube.com/embed/';
			$result .= $matches[2].'?autoplay='.$autoplay;

			return $result;
		}
		return false;
	}
}