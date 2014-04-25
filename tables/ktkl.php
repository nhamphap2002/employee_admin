<?php

//--------------------------------------------
//Designed by Generate Script Tool
//Copyright (c) 2014 by Admin
//--------------------------------------------

class TableTienluongKtkl extends FTable {

    var $id = 0;
    var $idnhanvien = null;
    var $hinhthuc = null;
    var $lydo = null;
    var $caccap = null;
    var $ngay = null;

    function __construct(&$db) {
        parent::__construct("#__ktkl", "id", $db);
    }

}

?>