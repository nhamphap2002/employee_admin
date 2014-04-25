<?php

//--------------------------------------------
//Designed by Generate Script Tool
//Copyright (c) 2014 by Admin
//--------------------------------------------

class TableTienluongBancc extends FTable {

    var $id = 0;
    var $nam = 0;
    var $thang = 0;
    var $ngaycong = null;
    var $note = null;

    function __construct(&$db) {
        parent::__construct("#__bancc", "id", $db);
    }

}

?>