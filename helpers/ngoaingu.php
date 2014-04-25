<?php

//--------------------------------------------
//Designed by Generate Script Tool
//Copyright (c) 2014 by Admin
//--------------------------------------------

defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.helper');

class Ngoaingu {

    public static function add($post = array()) {
        $objTable = JTable::getInstance('TienluongNgoaingu', 'Table');
        if ($objTable->bind($post)) {
            if ($objTable->store()) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public static function update($post = array()) {
        $objTable = JTable::getInstance('TienluongNgoaingu', 'Table');
        if (!$objTable->bind($post)) {
            return false;
        }
        if (!$objTable->store()) {
            return false;
        }
        return true;
    }

    public static function delete() {
        $arrId = JRequest::getVar('cid', array(), '', 'array');
        if (count($arrId) > 0) {
            $record = JTable::getInstance('TienluongNgoaingu', 'Table');
            foreach ($arrId as $id) {
                if (!$record->delete($id)) {
                    JError::raiseError(500, $record->getError());
                    return false;
                }
            }
        }
        return true;
    }

    public static function getAll() {
        $db = JFactory::getDbo();
        $query = "SELECT * FROM #__ngoaingu ORDER BY id DESC";
        $db->setQuery($query);
        $objListResult = $db->loadObjectList();
        if ($objListResult) {
            return $objListResult;
        } else {
            return array();
        }
    }

    public static function getInfoById($id) {
        $db = JFactory::getDbo();
        $query = "SELECT * FROM #__ngoaingu WHERE id = {$id}";
        $db->setQuery($query);
        $objResult = $db->loadObject();
        if ($objResult) {
            return $objResult;
        } else {
            return array();
        }
    }

}

?>