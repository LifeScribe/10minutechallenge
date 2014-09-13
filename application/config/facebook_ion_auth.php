<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| Settings.
| -------------------------------------------------------------------------
*/
$config['app_id'] 		= '769634313082294'; 		// Your app id
$config['app_secret'] 	= '708c8f563986808ce2864711ad537d82'; 		// Your app secret key
$config['scope'] 		= 'email'; 	// custom permissions check - http://developers.facebook.com/docs/reference/login/#permissions
$config['redirect_uri'] = ''; 		// url to redirect back from facebook. If set to '', site_url('') will be used