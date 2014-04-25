<?php

//--------------------------------------------
//Designed by Generate Script Tool
//Copyright (c) 2014 by Admin
//--------------------------------------------

defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.controller');

class TienluongControllerNationality extends FController {

    public function __construct($config = array()) {
        parent::__construct($config);
    }

    public function display($model = null, $cachable = false, $urlparams = false) {
        $view_name = JRequest::getVar('view');
        if (!$view_name) {
            $view_name = 'nationality.list';
        }
        $view = $this->createView($view_name, 'TienluongView');
        $model = $this->createModel('nationality', 'TienluongModel');
        if ($model) {
            $view->setModel($model);
        }
        $view->display($tpl = null);
    }

    function add() {
        $post = $_POST;
        print_r($post);
        exit();
        if (Nationality::add($post)) {
            $msg = "Ban them moi thanh cong";
        } else {
            $msg = "Ban Them moi chua thanh cong";
        }
        $link = 'index.php?option=com_tienluong&task=nationality.display&view=nationality.list';
        $app = JFactory::getApplication();
        $app->redirect($link, $msg);
    }

    function addnew() {
        $link = 'index.php?option=com_tienluong&task=nationality.display&view=nationality.form';
        $app = JFactory::getApplication();
        $app->redirect($link);
    }

    function import() {

        $uploaddir = JPATH_COMPONENT_ADMINISTRATOR . DS . 'upload_file' . DS;

        $file = $uploaddir . basename($_FILES['upload_file']['name']);

        if (move_uploaded_file($_FILES['upload_file']['tmp_name'], $file)) {
            $data = new Spreadsheet_Excel_Reader($file);
            $rowcount = $data->rowcount();
            header("Content-Type: text/html; charset=text/html; charset=UTF-8");
            for ($i = 2; $i < $rowcount; $i++) {
                $post['postcode'] = $data->val($i, 1);
                $post['nationality'] = utf8_encode(mysql_real_escape_string($data->val($i, 2)));
                Nationality::add($post);
            }
            $msg = "Ban da import thanh cong";
        } else {
            $file = $uploaddir . 'Dia-Gioi-Hanh-Chinh-VietNam.xls';
            $data = new Spreadsheet_Excel_Reader($file);
            $rowcount = $data->rowcount();
            header("Content-Type: text/html; charset=text/html; charset=UTF-8");
            for ($i = 2; $i < $rowcount; $i++) {
                $post['postcode'] = $data->val($i, 1);
                $post['nationality'] = utf8_encode(mysql_real_escape_string($data->val($i, 2)));
                Nationality::add($post);
            }
            $msg = "Ban da import chua thanh cong";
        }
        $link = 'index.php?option=com_tienluong&task=nationality.display&view=nationality.list';
        $app = JFactory::getApplication();
        $app->redirect($link, $msg);
    }

    function delete() {
        if (Nationality::delete()) {
            $msg = 'Ban da xoa thanh cong';
        } else {
            $msg = 'Ban da xoa khong thanh cong';
        }
        $app = JFactory::getApplication();
        $link = 'index.php?option=com_tienluong&task=nationality.display&view=nationality.list';
        $app->redirect($link, $msg);
    }

    function addimport() {
        $link = 'index.php?option=com_tienluong&task=nationality.display&view=nationality.import';
        $app = JFactory::getApplication();
        $app->redirect($link);
    }

}

?>