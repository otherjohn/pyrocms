<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$config['cache_dir'] = APPPATH.'cache/' . SITE_REF . '/';

$config['cache_default_expires'] = 0;

// Will soon make these options into settings items
$config['navigation_cache'] = 21600; // 6 hours
$config['rss_cache'] = 3600; // 1 hour

// Set the location for simplepie cache
$config['simplepie_cache_dir'] = APPPATH . 'cache/' . SITE_REF . '/simplepie/';

if ( ! is_dir($config['simplepie_cache_dir']))
{
	mkdir($config['simplepie_cache_dir'], 0777, TRUE);
}