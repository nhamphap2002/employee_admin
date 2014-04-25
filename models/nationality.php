<?php

//--------------------------------------------
//Designed by Generate Script Tool
//Copyright (c) 2014 by Admin
//--------------------------------------------

defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.model');

class TienluongModelNationality extends JModel {

    public function getInfoMessage() {
        return 'Bạn đã tạo Component thành công';
    }

    function getNationalitys() {
        $nationalitys = Nationality::getAll();
        if ($nationalitys) {
            return $nationalitys;
        } else {
            return array();
        }
    }

}

?>