<?php

//--------------------------------------------
//Designed by Generate Script Tool
//Copyright (c) 2014 by Admin
//--------------------------------------------

defined('_JEXEC') or die('Restricted access');
class TienluongViewTienluong extends FView {

    public function display($tpl = null) {
        JToolBarHelper::title('tienluong');
        parent::display($tpl);
    }

    public function view_list() {
        $model = $this->getModel('tienluong', 'TienluongModel');
        $infomessage = $model->getInfoMessage();
        $this->assignRef('infomassage', $infomessage);
    }

}

?>