<?php

//--------------------------------------------
//Designed by Generate Script Tool
//Copyright (c) 2014 by Admin
//--------------------------------------------

class TableTienluongQuatrinhdt extends FTable {

    var $id = 0;
    var $idnhanvien = 0;
    var $idhedaotao = 0;
    var $idchuyenmon = 0;
    var $tungay = null;
    var $denngay = null;
    var $ghichu = null;

    function __construct(&$db) {
        parent::__construct("#__quatrinhdt", "id", $db);
    }

}

?>