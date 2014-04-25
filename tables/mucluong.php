<?php

//--------------------------------------------
//Designed by Generate Script Tool
//Copyright (c) 2014 by Admin
//--------------------------------------------

class TableTienluongMucluong extends FTable {

    var $id = 0;
    var $hesl = 0;
    var $mucluong = 0;

    function __construct(&$db) {
        parent::__construct("#__mucluong", "id", $db);
    }

}

?>