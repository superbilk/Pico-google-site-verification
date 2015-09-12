<?php

/**
 * Helps with google site verification for webmastertools
 *
 * @author Christian Schmidt
 * @link http://superbilk.com
 */
class Pico_Google_Site_Verification {

	public function config_loaded(&$settings)
	{	
		if (isset($settings['google_site_verification']))
        {
            $this->google_site_verification = $settings['google_site_verification'];
        }
	}

	public function request_url(&$url)
	{
		if (!empty($this->google_site_verification) && ($url == $this->google_site_verification)) {
			header($_SERVER['SERVER_PROTOCOL'].' 200 OK');
			header('Content-Type: text/html; charset=UTF-8');
			$content = "google-site-verification: " . $this->google_site_verification;
			die($content);
		}
	}

}
