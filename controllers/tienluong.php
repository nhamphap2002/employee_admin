<?php

//--------------------------------------------
//Designed by Generate Script Tool
//Copyright (c) 2014 by Admin
//--------------------------------------------

defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.controller');

class TienluongControllerTienluong extends FController {

    public function __construct($config = array()) {
        parent::__construct($config);
    }

    public function display($model = null, $cachable = false, $urlparams = false) {
        $view_name = JRequest::getVar('view');
        if (!$view_name) {
            $view_name = 'tienluong.list';
        }
        $view = $this->createView($view_name, 'TienluongView');
        $model = $this->createModel('tienluong', 'TienluongModel');
        if ($model) {
            $view->setModel($model);
        }
        $view->display($tpl = null);
    }

}

?>