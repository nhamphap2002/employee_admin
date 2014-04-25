<?php


jimport('joomla.application.component.model');

class FModel extends JModel {

    //put your code here
    public function __construct($config = array()) {
        parent::__construct($config);
    }

    public function getPagination($total) {
        $app = JFactory::getApplication();
        $limit = $app->getUserStateFromRequest('global.list.limit', 'limit', $app->getCfg('list_limit'), 'int');
        $limitstart = $app->getUserStateFromRequest($context . 'limitstart', 'limitstart', 0, 'int');
        $limitstart = ( $limit != 0 ? (floor($limitstart / $limit) * $limit) : 0 );
        jimport('joomla.html.pagination');
        return new JPagination($total, $limitstart, $limit);
    }

}

?>
