<?php

//--------------------------------------------
//Designed by Generate Script Tool
//Copyright (c) 2014 by Admin
//--------------------------------------------

defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.controller');

JLoader::register('FController', JPATH_COMPONENT_ADMINISTRATOR . DS . 'mvc' . DS . 'controller.class.php');
JLoader::register('FModel', JPATH_COMPONENT_ADMINISTRATOR . DS . 'mvc' . DS . 'model.class.php');
JLoader::register('FView', JPATH_COMPONENT_ADMINISTRATOR . DS . 'mvc' . DS . 'view.class.php');
JLoader::register('FTable', JPATH_COMPONENT_ADMINISTRATOR . DS . 'mvc' . DS . 'table.class.php');

if (!defined('JPATH_HELPER')) {
    define('JPATH_HELPER', JPATH_COMPONENT_ADMINISTRATOR . DS . 'helpers');
}
include_once (JPATH_HELPER . DS . 'helper.php');
HelperTienluong::includeFileInFolder(JPATH_HELPER);
$pathTable = JPATH_COMPONENT_ADMINISTRATOR . DS . 'tables';
HelperTienluong::includeFileInFolder($pathTable);

if (JRequest::getVar('task') == null) {
    JRequest::setVar('task', 'tienluong.display');
}

$controller = FController::getInstance('Tienluong');
$task = (JRequest::getVar('task') != '') ? JRequest::getVar('task') : 'display';
if ($task && strpos($task, '.') !== false) {
    $valueTask = explode('.', $task);
    $doTask = $valueTask[1];
} else {
    $doTask = $task;
}

/*
 * @var $document
 */

$document = JFactory::getDocument();
$document->addStyleSheet(JURI::base() . 'components/com_tienluong/assets/css/pstyle.css');

$controller->execute($doTask);
$controller->redirect();
?>