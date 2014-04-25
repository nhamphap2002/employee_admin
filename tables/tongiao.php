<?php

//--------------------------------------------
//Designed by Generate Script Tool
//Copyright (c) 2014 by Admin
//--------------------------------------------

class TableTienluongTongiao extends FTable {

    var $id = 0;
    var $tongiao = null;

    function __construct(&$db) {
        parent::__construct("#__tongiao", "id", $db);
    }

}

?>