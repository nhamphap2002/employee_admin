<?php

//--------------------------------------------
//Designed by Generate Script Tool
//Copyright (c) 2014 by Admin
//--------------------------------------------

class TableTienluongTrinhdo extends FTable {

    var $id = 0;
    var $trinhdo = null;

    function __construct(&$db) {
        parent::__construct("#__trinhdo", "id", $db);
    }

}

?>