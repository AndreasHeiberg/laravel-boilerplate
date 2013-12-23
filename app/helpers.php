<?php

if ( ! function_exists('str_after'))
{
	/**
	 * Get the rest of a string after needle.
	 *
	 * @param  string  $haystack
	 * @param  string  $needle
	 * @return string
	 */
	function str_after($haystack, $needle) 
	{
		$string = strstr($haystack, $needle);
		$string = str_replace($needle, '', $string);

		return $string == '' ? false : $string;
	}
}