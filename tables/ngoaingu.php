<?php

//--------------------------------------------
//Designed by Generate Script Tool
//Copyright (c) 2014 by Admin
//--------------------------------------------

class TableTienluongNgoaingu extends FTable {

    var $id = 0;
    var $tenngoaingu = null;

    function __construct(&$db) {
        parent::__construct("#__ngoaingu", "id", $db);
    }

}

?>