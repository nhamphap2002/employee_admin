<?php


class FTable extends JTable {

    public static function getInstance($type, $prefix = 'TablePrefix', $config = array()) {
        return parent::getInstance($type, $prefix, $config);
    }

}

?>
