<?php


jimport('joomla.application.component.view');

class FView extends JView {

    function __construct($config) {
        parent::__construct($config);
    }

    public function display($tpl = null) {

        $view = JRequest::getVar('view');
        $arrView = explode(".", $view);
        $childView = null;
        if (count($arrView) >= 2) {
            $childView = $arrView[1];
        }
        $this->_setLayoutPath($childView);

        if (method_exists($this, "view_" . $childView)) {
            $view_method = "view_" . $childView;
            $this->$view_method();
            parent::display();
        } else {
            $this->_setLayoutPath('list');
            $this->view_list();
            parent::display();
            return;
        }
    }

    protected function _setLayoutPath($childView) {
        parent::_setPath('template', $this->_basePath . '/views/' . $this->getName() . '/tmpl/' . $childView);
    }

}

?>
