<?php

//--------------------------------------------
//Designed by Generate Script Tool
//Copyright (c) 2014 by Admin
//--------------------------------------------

class TableTienluongChuyenmon extends FTable {

    var $id = 0;
    var $tenchuyenmon = null;

    function __construct(&$db) {
        parent::__construct("#__chuyenmon", "id", $db);
    }

}

?>