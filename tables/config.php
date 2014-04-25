<?php

//--------------------------------------------
//Designed by Generate Script Tool
//Copyright (c) 2014 by Admin
//--------------------------------------------

class TableTienluongConfig extends FTable {

    var $id = 0;
    var $key = null;
    var $value = null;

    function __construct(&$db) {
        parent::__construct("#__config", "id", $db);
    }

}

?>