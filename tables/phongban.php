<?php

//--------------------------------------------
//Designed by Generate Script Tool
//Copyright (c) 2014 by Admin
//--------------------------------------------

class TableTienluongPhongban extends FTable {

    var $id = 0;
    var $tenphongban = null;

    function __construct(&$db) {
        parent::__construct("#__phongban", "id", $db);
    }

}

?>