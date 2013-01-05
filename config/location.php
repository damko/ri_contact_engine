<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Contact Engine configuration file
 * Created on Aug 11, 2011 by dam d.venturin@squadrainformatica.com
 */

if(file_exists(APPPATH.'/config/location.php')) {

	include(APPPATH.'/config/location.php');

} else {
	
	//configuration for the location object
	$config['location']['baseDn'] = "ou=locations,o=ce,dc=example,dc=com";
	$config['location']['objectClass'] = "dueviLocation"; //ldap objectClass representing the location class
	$config['location']['refreshPeriod'] = ""; //seconds
		
}
