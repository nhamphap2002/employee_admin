<?php

/*
  Created on : Apr 24, 2014, 10:02:24 AM
  Author: Tran Trong Thang
  Email: trantrongthang1207@gmai.com
 */
defined('_JEXEC') or die('Restricted access');

class TienluongViewNationality extends FView {

    public function display($tpl = null) {
        
        JToolBarHelper::title('Nationality');
        if (JRequest::getvar('view') == 'nationality.detail') {
            JToolBarHelper::title(JText::_("Edit"));
            JToolBarHelper::save('nationality.update');
            JToolBarHelper::cancel('nationality.cancel');
        } elseif (JRequest::getvar('view') == 'nationality.form') {
            JToolBarHelper::title(JText::_("Add"));
            JToolBarHelper::save('nationality.add');
            JToolBarHelper::cancel('nationality.cancel');
        } elseif (JRequest::getvar('view') == 'nationality.import') {
            JToolBarHelper::title(JText::_("Import"));
            JToolBarHelper::custom('nationality.import', 'upload', '', 'Import', false);
            JToolBarHelper::cancel('nationality.cancel');
        } else {
            JToolBarHelper::title(JText::_("Tinh Thanh"));
            JToolBarHelper::addNewX('nationality.addnew');
            JToolBarHelper::custom('nationality.addimport', 'upload', '', 'Import', false);
            JToolBarHelper::deleteListX('Do you want delete?', 'nationality.delete');
        }
        parent::display($tpl);
    }

    public function view_list() {
        $model = $this->getModel('nationality', 'TienluongModel');
        $listnation = $model->getNationalitys();
        $this->assignRef('listnation', $listnation);
    }

    public function view_form() {
        $model = $this->getModel('nationality', 'TienluongModel');
        $infomessage = $model->getInfoMessage();
        $this->assignRef('infomassage', $infomessage);
    }
    
    public function view_import() {
        $model = $this->getModel('nationality', 'TienluongModel');
        $infomessage = $model->getInfoMessage();
        $this->assignRef('infomassage', $infomessage);
    }

}

?>
