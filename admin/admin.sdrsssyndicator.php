<?php

/**
* @Copyright Copyright (C) 2010 sdaprel.ru
* @license GNU/GPL http://www.gnu.org/copyleft/gpl.html
**/

// no direct access
defined('_JEXEC') or die('Restricted access');

// Make sure the user is authorized to view this page
/*$user = & JFactory::getUser();
if (!$user->authorize( 'com_sdrsssyndicator', 'manage' )) {
	$mainframe->redirect( 'index.php', JText::_('ALERTNOTAUTH') );
}
*/
// Require the base controller
require_once (JPATH_COMPONENT.DS.'controllers'.DS.'defaultcontroller.php');

// Require specific controller if requested
if($controller = JRequest::getVar('controller')) {
	require_once (JPATH_COMPONENT.DS.'controllers'.DS.$controller.'.php');
}
//die('shit');
// Create the controller
$classname	= 'sdrsssyndicatorController'.$controller;
$controller = new $classname( );

// Perform the Request task
$controller->execute(JRequest::getCmd('task'));

// Redirect if set by the controller
$controller->redirect();

?>
