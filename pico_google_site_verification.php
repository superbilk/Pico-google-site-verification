<?php

/**
 * Helps with google site verification for webmastertools
 *
 * @author Christian Schmidt
 * @link http://superbilk.com
 */
class Pico_Google_Site_Verification {

	public function request_url(&$url)
	{
		global $config;

		if (!empty($config['google_site_verification']) && ($url == $config['google_site_verification'])) {
			header($_SERVER['SERVER_PROTOCOL'].' 200 OK');
			header('Content-Type: text/html; charset=UTF-8');
			$content = "google-site-verification: " . $config['google_site_verification'];
			die($content);
		}
	}

}
