<?php

//--------------------------------------------
//Designed by Generate Script Tool
//Copyright (c) 2014 by Admin
//--------------------------------------------

class TableTienluongChucvu extends FTable {

    var $id = 0;
    var $tenchucvu = null;

    function __construct(&$db) {
        parent::__construct("#__chucvu", "id", $db);
    }

}

?>