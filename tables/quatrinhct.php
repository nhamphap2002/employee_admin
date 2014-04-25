<?php

//--------------------------------------------
//Designed by Generate Script Tool
//Copyright (c) 2014 by Admin
//--------------------------------------------

class TableTienluongQuatrinhct extends FTable {

    var $id = 0;
    var $idnhanvien = 0;
    var $idphongvan = 0;
    var $phanxuong = null;
    var $idchucvu = 0;
    var $ngaychuyenct = null;

    function __construct(&$db) {
        parent::__construct("#__quatrinhct", "id", $db);
    }

}

?>