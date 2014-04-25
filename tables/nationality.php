<?php

//--------------------------------------------
//Designed by Generate Script Tool
//Copyright (c) 2014 by Admin
//--------------------------------------------

class TableTienluongTinhthanh extends FTable {

    var $id = 0;
    var $postcode = null;
    var $nationality = null;

    function __construct(&$db) {
        parent::__construct("#__nationality", "id", $db);
    }

}

?>