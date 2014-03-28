<?php
/**
 * @version     1.0.0
 * @package     com_studentreg
 * @copyright   Copyright (C) 2013. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      rohit singh <rhtsingh240@gmail.com> - http://eduvance.in
 */

// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.controllerform');

/**
 * Member controller class.
 */
class StudentregControllerMember extends JControllerForm
{

    function __construct() {
        $this->view_list = 'students';
        parent::__construct();
    }

}