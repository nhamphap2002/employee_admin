<?php

//--------------------------------------------
//Designed by Generate Script Tool
//Copyright (c) 2014 by Admin
//--------------------------------------------

class TableTienluongDantoc extends FTable {

    var $id = 0;
    var $dantoc = null;

    function __construct(&$db) {
        parent::__construct("#__dantoc", "id", $db);
    }

}

?>