<?php


jimport('joomla.application.component.controller');

class FController extends JController {

    private $suffixName;

    function __construct($config) {
        if (!isset($config['default_view']))
            $config['default_view'] = $this->getSuffixName();
        if (empty($config['default_view']))
            $config['default_view'] = $this->getName();
        parent::__construct($config);
    }

    protected function _display($viewName = '', $modelNames = array(), $cachable = false, $urlparams = false) {
        /* @var $viewName JView */
        if (!$viewName)
            $viewName = JRequest::getVar('view', $this->default_view);

        $document = JFactory::getDocument();
        $viewType = $document->getType();
        $viewLayout = JRequest::getCmd('layout', 'default');

        $view = $this->getView(ucfirst($viewName), $viewType, '', array('base_path' => $this->basePath, 'layout' => $viewLayout));

        // Get/Create the model
        if (!is_array($modelNames))
            $modelNames = array($modelNames);

        if (!empty($modelNames)) {
            foreach ($modelNames as $modelName) {
                if ($model = $this->getModel($modelName)) {
                    // Push the model into the view (as default)
                    $view->setModel($model, true);
                }
            }
        } elseif ($model = $this->getModel($this->getSuffixName())) {
            $view->setModel($model, true);
        }



        return parent::display($cachable, $urlparams);
    }

    protected function createModel($name = '', $prefix = '', $config = array()) {
        jimport('joomla.application.component.model');
        return parent::createModel($name, $prefix, $config);
    }

    protected function createView($name, $prefix = '', $type = 'html', $config = array()) {

        jimport('joomla.application.component.view');
        $arrViews = explode('.', $name);
        $view = $arrViews[0];

        return parent::createView($view, $prefix, $type, $config);
    }

    public function display($cachable = false, $urlparams = false) {


        return $this->_display(null, null, $cachable, $urlparams);
    }

    protected function _createUrl($task = 'search.display', $view = 'search.list', $layout = 'default', $format = 'html', $params = array()) {
        $name = $this->getName();
        $url = "index.php?option=com_$name&task=$task&view=$view";
        if (is_array($params) && !empty($params)) {
            foreach ($params as $key => $value) {
                $url .= "&$key=$value";
            }
        }
        return $url;
    }

    protected function closeApp($output) {
        echo $output;
        $app = JFactory::getApplication();
        $app->close();
    }

    public function setRedirect($msg = null, $task = 'display', $view = 'default', $layout = 'default', $format = 'html', $params = array(), $type = null) {
        $redirect = JRequest::getVar('redirect'); //should 
        if (empty($redirect)) {
            $url = $this->_createUrl($task, $view, $layout, $format);
        }
        return parent::setRedirect($url, $msg, $type);
    }

    public function getSuffixName() {

        if (empty($this->suffixName)) {
            $r = null;
            if (!preg_match('/(.*)Controller(.*)/i', get_class($this), $r)) {
                JError::raiseError(500, JText::_('JLIB_APPLICATION_ERROR_CONTROLLER_GET_NAME'));
            }
            $this->suffixName = strtolower($r[2]);
        }

        return $this->suffixName;
    }

}

?>
