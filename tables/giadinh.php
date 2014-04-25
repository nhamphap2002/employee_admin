<?php

//--------------------------------------------
//Designed by Generate Script Tool
//Copyright (c) 2014 by Admin
//--------------------------------------------

class TableTienluongGiadinh extends FTable {

    var $id = 0;
    var $idnhanvien = 0;
    var $hotenbo = null;
    var $nghenghiepbo = null;
    var $hotenme = null;
    var $nghenghiepme = null;
    var $truquan = null;
    var $vochong = null;
    var $socon = 0;

    function __construct(&$db) {
        parent::__construct("#__giadinh", "id", $db);
    }

}

?>