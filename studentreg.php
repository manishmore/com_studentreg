<?php
/**
 * @version     1.0.0
 * @package     com_studentreg
 * @copyright   Copyright (C) 2013. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      rohit singh <rhtsingh240@gmail.com> - http://eduvance.in
 */


// no direct access
defined('_JEXEC') or die;

// Access check.
if (!JFactory::getUser()->authorise('core.manage', 'com_studentreg')) 
{
	throw new Exception(JText::_('JERROR_ALERTNOAUTHOR'));
}

// Include dependancies
jimport('joomla.application.component.controller');

$controller	= JController::getInstance('Studentreg');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
